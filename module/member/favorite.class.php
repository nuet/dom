<?php 
defined('IN_DESTOON') or exit('Access Denied');
class favorite {
	var $itemid;
	var $db;
	var $table;
	var $fields;
	var $errmsg = errmsg;

    function favorite() {
		global $db;
		$this->table = $db->pre.'favorite';
		$this->db = &$db;
		$this->fields = array('listorder', 'userid','typeid','title','style','url','addtime','note');
    }

	function pass($post) {
		global $L;
		if(!is_array($post)) return false;
		if(!$post['title']) return $this->_($L['pass_title']);
	
		return true;
	}

	function set($post) {
		if(!defined('DT_ADMIN')) $post = dhtmlspecialchars($post);
		return array_map("trim", $post);
	}

	function get_one($condition = '') {
        return $this->db->get_one("SELECT * FROM {$this->table} WHERE itemid=$this->itemid $condition");
	}

	function get_list($condition = 'status=3', $order = 'itemid DESC') {
		global $MODULE, $TYPE, $pages, $page, $pagesize, $offset, $L, $sum;
		if($page > 1 && $sum) {
			$items = $sum;
		} else {
			$r = $this->db->get_one("SELECT COUNT(*) AS num FROM {$this->table} WHERE $condition");
			$items = $r['num'];
		}
		$pages = pages($items, $page, $pagesize);
		$lists = array();
		$result = $this->db->query("SELECT * FROM {$this->table} WHERE $condition ORDER BY $order LIMIT $offset,$pagesize");
		while($r = $this->db->fetch_array($result)) {
			$r['addtime'] = date('Y-m-d H:i',$r['addtime']);
			$r['title'] = set_style($r['title'], $r['style']);
			if($r[tp]==17){
				$r[type]="模版";
			   $r['url'] = $MODULE[17]['linkurl'].'show-'.$r[id].'.html';
			  }elseif ($r[tp]==16){
			  	$r[type]="定制网站";
			   $r['url'] =$MODULE[16]['linkurl'].'order.php?itemid='.$r[id].'.html';  	
			  }
			
			$lists[] = $r;
		}
		return $lists;
	}

	function add($post) {
		$post = $this->set($post);
		$sqlk = $sqlv = '';
		foreach($post as $k=>$v) {
			if(in_array($k, $this->fields)) { $sqlk .= ','.$k; $sqlv .= ",'$v'"; }
		}
        $sqlk = substr($sqlk, 1);
        $sqlv = substr($sqlv, 1);
		$this->db->query("INSERT INTO {$this->table} ($sqlk) VALUES ($sqlv)");
		return $this->itemid;
	}

	function edit($post) {
		$post = $this->set($post);
		$sql = '';
		foreach($post as $k=>$v) {
			if(in_array($k, $this->fields)) $sql .= ",$k='$v'";
		}
        $sql = substr($sql, 1);
	    $this->db->query("UPDATE {$this->table} SET $sql WHERE itemid=$this->itemid");
		return true;
	}

	function delete($itemid) {
		$itemids = is_array($itemid) ? implode(',', $itemid) : $itemid;
		$this->db->query("DELETE FROM {$this->table} WHERE itemid IN ($itemids)");
	}

	function _($e) {
		$this->errmsg = $e;
		return false;
	}
}
?>