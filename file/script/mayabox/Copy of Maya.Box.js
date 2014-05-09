//========================
//   ���ܣ�����һ������
//   �汾��1.3
//   ���ߣ�����
//   ���ڣ�2012-09-21
//   ���£�
//========================
//========================
//   ���ܣ�����Ƿ����Maya
//========================
if (typeof(Maya) == "undefined") {
        var Maya = function() {}
}
//========================
//   ���ܣ�����Ԫ�ض���
//========================
_ = function(o) {
        return document.getElementById(o);
}
//========================
//   ���ܣ�����Ƿ���IE�����
//========================
Maya.isIE = function() {
        return navigator.userAgent.toLowerCase().indexOf("msie") > 0 ? true: false;
}
//========================
//   ���ܣ�����Ƿ���IE6�����
//========================
Maya.isIE6 = function() {
        return navigator.userAgent.toLowerCase().indexOf("msie 6") > 0 ? true: false;
}

//========================
//   ���ܣ����¼�
//   �汾��1.0
//   ������o : element��e : string��fun : function
//   ���ڣ�2012-09-21
//   ���£�
//========================
Maya.BindEvent = function(o, e, fun) {
        if (Maya.isIE()) {
                o.attachEvent("on" + e,
                function() {
                        fun.call(o);
                });
        } else {
                o.addEventListener(e, fun, false);
        }
}
//========================
//   ���ܣ�����¼�
//   �汾��1.0
//   ������o : element��e : string��fun : function
//   ���ڣ�2012-09-21
//   ���£�
//========================
Maya.UnEvent = function(o, e, fun) {
        if (Maya.isIE()) {
                o.detachEvent("on" + e, fun);
        } else {
                o.removeEventListener(e, fun, false);
        }
}
//========================
//   ���ܣ�����Ԫ��CSS
//   �汾��1.0
//   ������eleName : Object��eleCSS : Object
//   ���ڣ�2012-09-21
//   ���£�
//========================
Maya.CssElement = function(eleName, eleCSS) {
        for (p in eleCSS) {
                eleName.style[p] = eleCSS[p];
        }
        return eleName;
}
//========================
//   ���ܣ�����Ԫ������
//   �汾��1.0
//   ������eleName : Object��eleCSS : Object
//   ���ڣ�2012-09-23
//   ���£�
//========================
Maya.attrElement = function(eleName, eleAttr) {
        for (p in eleAttr) {
                eleName[p] = eleAttr[p];
        }
        return eleName;
}
//========================
//   ���ܣ���ȡԪ��CSS
//   �汾��1.0
//   ������eleName : Object��style : Object
//   ���ڣ�2012-09-21
//   ���£�
//========================
Maya.CssGet = function(eleName, style) {
        return Maya.isIE() ? eleName.currentStyle: getComputedStyle(eleName);
}
//========================
//   ���ܣ�����Ԫ��
//   �汾��1.0
//   ������win : window��eleName : String��eleProperty : Object
//   ���ڣ�2012-09-21
//   ���£�
//========================
Maya.CreateElement = function(win, eleName, eleProperty) {
        var ele = win.document.createElement(eleName);
        if (arguments.length > 2) {
                for (p in eleProperty) {
                        ele[p] = eleProperty[p];
                }
        }
        return ele;
}
//========================
//   ���ܣ�����һ������
//   �汾��3.0
//   ������cfg : Object
//   ���ڣ�2012-09-21
//   ���£�
//========================
Maya.Box = function(cfg) {
        var opt = {
                text: "����",
                skin: "grid",
                win: window,
                type: "iframe",
                url: "",
                width: 350,
                height: 100,
                chtml: "",
                effect: true,
                position: "center",
                isConfirm: false,
                isAlert: false,
                inlineAuto: true,
                iframeAuto: true,
                iframeScroll: "auto",
                iframeReload: false,
                allowDrag: true,
                overlayShow: true,
                overlayAlpha: .1,
                btnMaximize: false,
                btnMinimize: false,
                btnClose: true,
                btnFold: false,
                btns: null,
                onShowBefore: null,
                onShow: null,
                onClose: null
        };
        var win;
        var tmp;
        var _self = this;
        var dragBg;
        var overlay, contain, head, wrapper, content, loading, bpanel, btns, iframe;
        var btnClose, btnMinimize, btnMaximize, btnFold;
        var winScreen = {};
        var eleParam = {};
        var containStatus = "normal";
        var containLeft, containTop;
        var posLeft, posTop;
        var saveTop, saveLeft, saveWidth, saveHeight;
        var iframeName = "iframe_" + parseInt(Math.random() * 100000000);
        var isHeadDown = false;
        this.getCfg = function() {
                return opt;
        }
        this.close = function() {
				if (opt.btnClose) {
                	Maya.UnEvent(btnClose, "click", eventBtnCloseClick);
				}
                if (iframe) {
                        if (Maya.isIE6()) {
                                content.removeChild(iframe);
                        }
                }
                var _c = win.__MayaBox;
                for (var i = 0; i < _c.length; i++) {
                        if (_c[i] === _self) {
                                _c.splice(i);
                        }
                }
                if (opt.effect) {
                        $(contain).slideUp(300,
                        function() {
                                win.document.body.removeChild(contain);
                        });
                } else {
                        win.document.body.removeChild(contain);
                }
                if (opt.overlayShow) {
                        win.document.body.removeChild(overlay);
                }
                if (typeof(opt.onClose) == "function") {
                        opt.onClose();
                }
        }
        this.minimize = function() {
                getScreenInfo();
                if (opt.effect) {
                        var cp_w = contain.offsetWidth;
                        var cp_h = contain.offsetHeight;
                        var cp = Maya.CreateElement(win, "div", {
                                className: opt.skin + "_minimize_bg"
                        });
                        Maya.CssElement(cp, {
                                width: contain.offsetWidth + "px",
                                height: contain.offsetHeight + "px",
                                left: Maya.CssGet(contain).left,
                                top: parseInt(Maya.CssGet(contain).top) + winScreen.scrollTop + "px"
                        });
                        win.document.body.appendChild(cp);
                        $(cp).animate({
                                width: "0px",
                                height: "0px",
                                left: "0px",
                                opacity: 0,
                                top: winScreen.clientHeight + winScreen.scrollTop - 2 + "px"
                        },
                        500,
                        function() {
                                win.document.body.removeChild(cp);
                        });
                }
                Maya.CssElement(contain, {
                        display: "none"
                });
                if (opt.overlayShow) {
                        Maya.CssElement(overlay, {
                                display: "none"
                        });
                }
                checkBoxContain();
                var __tasker = Maya.CreateElement(win, "div", {
                        title: "��ԭ",
                        className: opt.skin + "_minimize_tasker"
                });
                Maya.BindEvent(__tasker, "click",
                function() {
                        if (opt.effect) {
                                $(contain).slideDown(100);
                                $(__tasker).hide(100,
                                function() {
                                        $(this).remove();
                                });
                        } else {
                                Maya.CssElement(contain, {
                                        display: "block"
                                });
                                win.__boxContain.removeChild(this);
                        }
                        if (opt.overlayShow) {
                                Maya.CssElement(overlay, {
                                        display: "block"
                                });
                        }
                });
                __tasker.innerHTML = opt.text;
                win.__boxContain.appendChild(__tasker);
        }
        this.maximize = function() {
                getScreenInfo();
                getScreenInfo();
                if (containStatus == "minimized" || containStatus == "normal") {
                        containStatus = "maximized";
                        saveTop = parseInt(Maya.CssGet(contain).top);
                        saveLeft = parseInt(Maya.CssGet(contain).left);
                        if (Maya.CssGet(wrapper).display != "none") {
                                saveWidth = contain.offsetWidth;
                                saveHeight = content.offsetHeight;
                        }
                        opt.width = winScreen.clientWidth;
                        opt.height = winScreen.clientHeight;

                        var l = winScreen.scrollLeft,
                        t = winScreen.scrollTop;
                        w = opt.width,
                        h = opt.height - eleParam.boxBorHeight - eleParam.headHeight - eleParam.wrapperBorHeight - eleParam.btnsHeight;
                } else {
                        containStatus = "minimized";
                        var l = saveLeft,
                        t = saveTop;
                        w = saveWidth,
                        h = saveHeight;
                }
                if (opt.effect) {
                        $(contain).animate({
                                left: l + "px",
                                top: t + "px",
                                width: w + "px"
                        },
                        300);
                        $(content).animate({
                                height: h + "px"
                        },
                        300);
                } else {
                        Maya.CssElement(contain, {
                                left: l + "px",
                                top: t + "px",
                                width: w + "px"
                        });
                        Maya.CssElement(content, {
                                height: h + "px"
                        })
                }

        }
        this.fold = function() {
                if (opt.effect) {
                        $(wrapper).slideToggle(200, "linear");
                } else {
                        var s = Maya.CssGet(wrapper).display;
                        if (s == "" || s == "block") {
                                var d = "none";
                        } else {
                                var d = "block";
                        }
                        Maya.CssElement(wrapper, {
                                display: d
                        });
                }
        }
        this.getContain = function() {
                return contain;
        }
        this.getIframe = function() {
                return win.frames[iframeName];
        }
        this.setIndex = function(o) {
                var _c = win.__MayaBox;
                for (var i = 0; i < _c.length; i++) {
                        if (Maya.CssGet(_c[i].getContain()).zIndex != 99999) {
                                Maya.CssElement(_c[i].getContain(), {
                                        zIndex: 99999
                                });
                        }
                }
                Maya.CssElement(o, {
                        zIndex: 100000
                });
        }
        var getScreenInfo = function() {
                winScreen.height = Math.max(win.document.documentElement.clientHeight, win.document.documentElement.scrollHeight);
                winScreen.width = Math.max(win.document.documentElement.clientWidth, win.document.documentElement.scrollWidth);
                winScreen.clientWidth = win.document.documentElement.clientWidth;
                winScreen.clientHeight = win.document.documentElement.clientHeight;
                winScreen.scrollLeft = Math.max(win.document.documentElement.scrollLeft, win.document.body.scrollLeft);
                winScreen.scrollTop = Math.max(win.document.documentElement.scrollTop, win.document.body.scrollTop);
        }
        var eventBtnCloseClick = function(e) {
                _self.close();
        }
        var eventDragBgMouseMove = function(e) {
                if (!isHeadDown) return;
                if (Maya.isIE()) {
                        e = win.event;
                }
                var t = e.clientY - containTop < 0 ? 0 : e.clientY - containTop;
                Maya.CssElement(contain, {
                        left: e.clientX - containLeft + "px",
                        top: t + "px"
                });
        }
        var eventDragBgMouseUp = function(e) {
                try {
                        dragBg.releaseCapture();
                } catch(err) {}
                isHeadDown = false;

                Maya.CssElement(dragBg, {
                        display: "none"
                });
                Maya.UnEvent(dragBg, "mousemove", eventDragBgMouseMove);
                Maya.UnEvent(dragBg, "mouseup", eventDragBgMouseUp);
        }
        var eventIframeLoad = function(e) {
                removeLoading();
                if (opt.iframeAuto) {
                        if (Maya.isIE()) {
                                var h = win.frames[iframeName].document.body.offsetHeight;
                        } else {
                                var h = win.frames[iframeName].document.documentElement.offsetHeight;
                        }
                        Maya.CssElement(content, {
                                height: h + "px"
                        });
                        if (Maya.isIE6()) {
                                toggleLayout();
                        }
                        saveWidth = contain.offsetWidth;
                        saveHeight = content.offsetHeight;
                        if (opt.position == "center") {
                                var ch = h + eleParam.boxBorHeight + eleParam.headHeight + eleParam.wrapperBorHeight + eleParam.btnsHeight;
                                var t = parseInt((winScreen.clientHeight - ch) / 2);
                                if (t < 0) t = 0;
                                if (Maya.isIE6() || !opt.effect) {
                                        Maya.CssElement(contain, {
                                                top: t + "px"
                                        })
                                } else {
                                        $(contain).animate({
                                                top: t + "px"
                                        },
                                        500);
                                }
                        }
                }
                onShow();
                if (!opt.iframeReload) {
                        Maya.UnEvent(iframe, "load", eventIframeLoad);
                }
        }
        var inlineLoad = function() {
                if (opt.inlineAuto) {
                        Maya.CssElement(content, {
                                height: "auto"
                        });
                }
                var h = tmp.scrollHeight;
                content.innerHTML = tmp.innerHTML;
                win.document.body.removeChild(tmp);
                if (opt.inlineAuto) {
                        if (opt.position == "center") {
                                var t = parseInt((winScreen.clientHeight - h - eleParam.boxBorHeight - eleParam.headHeight - eleParam.wrapperBorHeight - eleParam.btnsHeight) / 2);
                                t = t < 0 ? 0 : t;
                                if (opt.effect) {
                                        $(contain).animate({
                                                top: t + "px"
                                        },
                                        200);
                                } else {
                                        Maya.CssElement(contain, {
                                                top: t + "px"
                                        });
                                }
                        }
                }
                onShow();
        }
        var checkBoxContain = function() {
                if (typeof(win.__boxContain) == "undefined") {
                        win.__boxContain = Maya.CreateElement(win, "div", {
                                className: "box_contain"
                        });
                        win.document.body.appendChild(__boxContain);
                }
                getScreenInfo();
                Maya.CssElement(__boxContain, {
                        top: winScreen.clientHeight - __boxContain.offsetHeight + "px"
                })
        }
        var toggleLayout = function() {
                Maya.CssElement(contain, {
                        width: opt.width + 1 + "px"
                });
                win.setTimeout(function() {
                        Maya.CssElement(contain, {
                                width: opt.width + "px"
                        });
                },
                1);
        }
        var createDrop = function() {
                dragBg = win.document.getElementById("dragBg");
                if (dragBg) {
                        Maya.CssElement(dragBg, {
                                display: "block"
                        });
                } else {
                        dragBg = Maya.CreateElement(win, "div", {
                                id: "dragBg",
                                className: "dragBg"
                        });
                        dragBg.onselectstart=function(){return false;}
                        Maya.CssElement(dragBg, {
                                //width : winScreen.width+"px",
                                width: "100%",
                                height: winScreen.height + "px"
                        });
                        win.document.body.appendChild(dragBg);
                }
        }
        var onShow = function() {
                if (typeof(opt.onShow) == "function") {
                        opt.onShow();
                }
        }
        var createElement = function() {
                //��������
                if (opt.overlayShow) {
                        overlay = Maya.CreateElement(win, "div", {
                                className: opt.skin + "_overlay"
                        });
                        Maya.CssElement(overlay, {
                                opacity: opt.overlayAlpha,
                                filter: "alpha(opacity=" + opt.overlayAlpha * 100 + ")",
                                width: winScreen.width + "px",
                                height: winScreen.height + "px"
                        });
                        win.document.body.appendChild(overlay);
                }
                //�������ⲿ����
                contain = Maya.CreateElement(win, "div", {
                        type: "__maya_box",
                        className: opt.skin + "_contain"
                });
                contain.onselectstart=function(){return false;}
                Maya.CssElement(contain, {
                        width: opt.width + "px",
                        left: -9000 + "px",
                        top: -9000 + "px"
                });
                Maya.BindEvent(contain, "mousedown",
                function() {
                        _self.setIndex(this);
                });
                box = Maya.CreateElement(win, "div", {
                        type: "__maya_box",
                        className: opt.skin + "_box"
                });
                contain.appendChild(box);
                //�����������
                bpanel = Maya.CreateElement(win, "div", {
                        className: opt.skin + "_bpanel"
                });
                box.appendChild(bpanel);

                //����ͷ��
                head = Maya.CreateElement(win, "div", {
                        className: opt.skin + "_head"
                });
                box.appendChild(head);
                head.innerHTML = '<div class="' + opt.skin + '_head_contain"><div class="' + opt.skin + '_head_text">' + opt.text + '</div></div>';


                //������������
                wrapper = Maya.CreateElement(win, "div", {
                        className: opt.skin + "_wrapper"
                });
                box.appendChild(wrapper);
                //��������϶�
                if (opt.allowDrag) {
                        //head�����¼�
                        Maya.BindEvent(head, "mousedown",
                        function(e) {
                                getScreenInfo();
                                isHeadDown = true;
                                if (Maya.isIE()) {
                                        e = win.event;
                                }
                                containLeft = e.clientX - parseInt(Maya.CssGet(contain).left);
                                containTop = e.clientY - parseInt(Maya.CssGet(contain).top);
                                //�����϶���
                                createDrop();
                                //�϶��� �ƶ��¼�
                                try {
                                        dragBg.setCapture();
                                } catch(e) {}
                                Maya.BindEvent(dragBg, "mousemove", eventDragBgMouseMove);

                                //�϶��� ��굯���¼�
                                Maya.BindEvent(dragBg, "mouseup", eventDragBgMouseUp);
                        })
                }

                
                //�������رհ�ť 
                if (opt.btnClose) {
					//�����رհ�ť
					btnClose = Maya.CreateElement(win, "div", {
							className: opt.skin + "_btn_bg ",
							title: "�ر�"
					});
					bpanel.appendChild(btnClose);
                        Maya.BindEvent(btnClose, "click", eventBtnCloseClick);
                        Maya.attrElement(btnClose, {
                                className: btnClose.className + opt.skin + "_btn_close"
                        });
                }
                //���������󻯰�ť
                if (opt.btnMaximize) {
					//������󻯰�ť
					btnMaximize = Maya.CreateElement(win, "div", {
							className: opt.skin + "_btn_bg ",
							title: "���"
					});
					bpanel.appendChild(btnMaximize);
                        Maya.BindEvent(btnMaximize, "click",
                        function() {
                                _self.maximize();
                        });
                        Maya.attrElement(btnMaximize, {
                                className: btnMaximize.className + opt.skin + "_btn_maximize"
                        });
                }
                //��������۵���ť
                if (opt.btnFold) {
					//�����۵���ť
					btnFold = Maya.CreateElement(win, "div", {
							className: opt.skin + "_btn_bg ",
							title: "�۵�"
					});
					bpanel.appendChild(btnFold);
                        Maya.BindEvent(btnFold, "click",
                        function() {
                                _self.fold();
                        });
                        Maya.attrElement(btnFold, {
                                className: btnFold.className + opt.skin + "_btn_fold"
                        });
                }
                //���������С����ť
                if (opt.btnMinimize) {
					//������С��
					btnMinimize = Maya.CreateElement(win, "div", {
							className: opt.skin + "_btn_bg ",
							title: "��С��"
					});
					bpanel.appendChild(btnMinimize);
                        Maya.BindEvent(btnMinimize, "click",
                        function() {
                                _self.minimize();
                        });
                        Maya.attrElement(btnMinimize, {
                                className: btnMinimize.className + opt.skin + "_btn_minimize"
                        });
                }
                //������������
                content = Maya.CreateElement(win, "div", {
                        className: opt.skin + "_content"
                });
                wrapper.appendChild(content);
                //����Loading
                loading = Maya.CreateElement(win, "div", {
                        className: opt.skin + "_loading"
                });
                content.appendChild(loading);
                //����ṩ�˰�ť
                if ((opt.btns) != null) {
                        btns = Maya.CreateElement(win, "div", {
                                className: opt.skin + "_btns"
                        });
                        wrapper.appendChild(btns);
                        for (var i = 0; i < opt.btns.length; i++) { (function(s) {
                                        var btn = Maya.CreateElement(win, "input", {
                                                className: opt.skin + "_btns_btn",
                                                type: "button",
								hidefocus : "true",
                                                value: opt.btns[s].text
                                        });
                                        btns.appendChild(btn);
                                        //�����ȡ����ť
                                        if (opt.btns[s].isCancel) {
                                                Maya.BindEvent(btn, "click",
                                                function() {
                                                        _self.close();
                                                });
                                        } else if (typeof(opt.btns[s].onClick) == "function") {
                                                var fun = opt.btns[s].onClick;
                                                var callback = function(e) {
                                                        if (Maya.isIE()) {
                                                                var e = win.event;
                                                        }
                                                        //�ص�������box�����¼�Ŀ������¼�����
                                                        fun(_self, this, e);
                                                }
                                                Maya.BindEvent(btn, "click", callback);
                                        } else {}
                                })(i);
                        }
                }

                //��Ⱦbox����
                renderLayout();
        }
        var setContentHeight = function() {
                eleParam.containHeight = contain.offsetHeight;
                eleParam.headHeight = head.offsetHeight;
                eleParam.wrapperHeight = wrapper.offsetHeight;
                eleParam.btnsHeight = 0;
                if ((opt.btns) != null) {
                        btnsHeight = btns.offsetHeight;
                }
                eleParam.boxBorHeight = eleParam.containHeight - eleParam.headHeight - eleParam.wrapperHeight;
                eleParam.wrapperBorHeight = eleParam.wrapperHeight - eleParam.btnsHeight;
                eleParam.contentHeight = opt.height - eleParam.boxBorHeight - eleParam.headHeight - eleParam.btnsHeight - eleParam.wrapperBorHeight;

                Maya.CssElement(content, {
                        height: eleParam.contentHeight + "px"
                });
        }
        var renderLayout = function() {
                win.document.body.appendChild(contain);
                _self.setIndex(contain);
                setContentHeight();

                if (typeof(opt.position) == "string") {
                        switch (opt.position) {
                        default:
                        case "center":
                                var pos = {
                                        left: parseInt((winScreen.clientWidth - opt.width) / 2) + winScreen.scrollLeft + "px",
                                        top: parseInt((winScreen.clientHeight - contain.offsetHeight) / 2) + winScreen.scrollTop + "px"
                                }
                                break;
                        case "centerTop":
                                var pos = {
                                        left: parseInt((winScreen.clientWidth - opt.width) / 2) + winScreen.scrollLeft + "px",
                                        top: 0 + "px"
                                }
                                break;
                        case "centerBottom":
                                var pos = {
                                        left: parseInt((winScreen.clientWidth - opt.width) / 2) + winScreen.scrollLeft + "px",
                                        top: "",
                                        bottom: 0 + "px"
                                }
                                break;
                        case "leftTop":
                                var pos = {
                                        left: 0 + "px",
                                        top: 0 + "px"
                                }
                                break;
                        case "leftBottom":
                                var pos = {
                                        left: 0 + "px",
                                        top: "",
                                        bottom: 0 + "px"
                                }
                                break;
                        case "rightBottom":
                                var pos = {
                                        left: "",
                                        top: "",
                                        right: 0 + "px",
                                        bottom: 0 + "px"
                                }
                                break;
                        case "rightTop":
                                var pos = {
                                        left: "",
                                        right: 0 + "px",
                                        top: 0 + "px"
                                }
                                break;
                        }
                } else {
                        var pos = opt.position;
                }

                Maya.CssElement(contain, pos);
                if (opt.effect && !Maya.isIE()) {
                        Maya.CssElement(contain, {
                                display: "none"
                        });
                        $(contain).slideDown(100,
                        function() {
                                setContent();
                        });
                } else {
                        setContent();
                }

        }
        var setContent = function() {
                Maya.CssElement(content, {
                        height: opt.height + "px"
                });
                if (opt.position == "center") {
                        var t = parseInt((winScreen.clientHeight - opt.height - eleParam.boxBorHeight - eleParam.headHeight - eleParam.wrapperBorHeight - eleParam.btnsHeight) / 2);
                        t = t < 0 ? 0 : t;
                        Maya.CssElement(contain, {
                                top: t + "px"
                        });
                }
                switch (opt.type) {
                default:
                case "iframe":
                        iframe = Maya.CreateElement(win, "iframe", {
                                id: iframeName,
                                name: iframeName,
                                src: opt.url,
                                scrolling: opt.iframeScroll,
                                frameBorder: 0,
                                className: opt.skin + "_iframe"
                        });
                        content.appendChild(iframe);
                        Maya.BindEvent(iframe, "load", eventIframeLoad);
                        break;
                case "inline":
                        tmp = Maya.CreateElement(win, "div");
                        Maya.CssElement(tmp, {
                                position: "absolute",
                                width: opt.width + "px",
                                left: "-9999px",
                                top: "-9999px"
                        });
                        var tc = Maya.CreateElement(win, "div");
                        if (opt.isConfirm) {
                                opt.inlineAuto = true;
                                Maya.attrElement(tc, {
                                        className: opt.skin + "_confirm"
                                })
                        } else if (opt.isAlert) {
                                opt.inlineAuto = true;
                                Maya.attrElement(tc, {
                                        className: opt.skin + "_alert"
                                })
                        }
                        tmp.appendChild(tc);
                        win.document.body.appendChild(tmp);
                        if (opt.url != "") {
                                $(tc).load(opt.url,
                                function() {
                                        inlineLoad();
                                });
                        } else {
                                tc.innerHTML = opt.chtml;
                                inlineLoad();
                        }
                        break;
                }
        }
        var removeLoading = function() {
                try {
                        if (Maya.isIE() || !opt.effect) {
                                content.removeChild(loading);
                        } else {
                                $(loading).fadeOut(1000,
                                function() {
                                        $(loading).remove();
                                })
                        }
                } catch(err) {}
        }
        var resetOpt = function() {
                if (new String(opt.width).indexOf("%") > 0) {
                        opt.width = parseInt(winScreen.clientWidth * parseInt(opt.width) / 100);
                }
                if (new String(opt.height).indexOf("%") > 0) {
                        opt.height = parseInt(winScreen.clientHeight * parseInt(opt.height) / 100);
                }
        }
        var __construct = function() {
                //���洴���Ĵ���
                win = cfg.win == undefined ? window: cfg.win;
                if (typeof(win.__MayaBox) == "undefined") {
                        win.__MayaBox = new Array();
                }
                win.__MayaBox.push(_self);
                //��ȡ��Ļ��ز���
                getScreenInfo();
                //����
                for (c in cfg) {
                        opt[c] = cfg[c];
                }
                //�������ò���
                resetOpt();
                if (typeof(opt.onShowBefore) == "function") {
                        opt.onShowBefore();
                }

                //����Ԫ��
                createElement();
        }
        __construct();
}