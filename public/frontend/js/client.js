CRM_TRACKING_CLIENT = {
    tracking_id : '',
    bizfly_cookie:{},
    is_tracked : false,
    crm_cookies : null,
    key_hash_info:null,
    adm:{},
    push_crm_cookies_to_c:function(cookies){
        if(!(cookies && Array.isArray(cookies)))
        {
            cookies = [];
        }
        if(CRM_TRACKING_CLIENT.crm_cookies)
        {

            for(var i in CRM_TRACKING_CLIENT.crm_cookies)
            {
                let crm_cookie = CRM_TRACKING_CLIENT.crm_cookies[i];
                let has_value = cookies && Array.isArray(cookies) &&  cookies.filter(function (item) {
                    return item.value == crm_cookie.value;
                });
                if(!(has_value && has_value.length>0))
                {
                    if(crm_cookie &&typeof  crm_cookie =='object')
                    {
                        if(cookies && Array.isArray(cookies))
                        {
                            cookies.push(crm_cookie);

                        }

                    }
                }

            }
        }
        if(cookies && Array.isArray(cookies))
        {
            CRM_TRACKING_CLIENT.crm_cookies = cookies;

        }

        return cookies;
    },
    getAdmLogUrl(){
        let domainlog =  CRM_TRACKING_CLIENT.adm && CRM_TRACKING_CLIENT.adm.domainlog;
        domainlog = domainlog?domainlog:"contineljs.com";
        return 'https://'+domainlog+'/'
    },
    __push_crm_cookies_to_c:function (cookies,cookie){


        if(!cookies)
        {
            cookies = [];
        }
        if(cookie &&typeof  cookie =='object')
        {
            let has_value = cookies.filter(function (item) {
                return item.value == cookie.value|| cookie.domain && item.domain == cookie.domain;
            });
            if( !(has_value&& has_value.length>0))
            {
                cookies.push(cookie);
            }
        }
        return cookies;
    },
    _buildQueryString: function (object) {
        if (Object.prototype.toString.call(object) !== "[object Object]") return "";

        var args = []
        for (var key in object) {
            destructure(key, object[key])
        }

        return args.join("&")

        function destructure(key, value) {
            if (Array.isArray(value)) {
                for (var i = 0; i < value.length; i++) {
                    destructure(key + "[" + i + "]", value[i])
                }
            } else if (Object.prototype.toString.call(value) === "[object Object]") {
                for (var i in value) {
                    destructure(key + "[" + i + "]", value[i])
                }
            } else args.push(encodeURIComponent(key) + (value != null && value !== "" ? "=" + encodeURIComponent(value) : ""))
        }
    },

    uuidv4: function () {
        return ([1e7] + -1e3 + -4e3 + -8e3 + -1e11).replace(/[018]/g, c =>
            (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
        )
    },
    list_lv2:['com','edu','gov','org','biz','net'],
    getDomainName: function(hostname) {
        let names = hostname.split('.');
        let start = 1;
        if(names[1] && CRM_TRACKING_CLIENT.list_lv2.indexOf(names[1])!==-1 || names.length<=2)
        {
            start = 0;
        }
        return names.slice(start, names.length).join('.');
    },
    crm_setCookie:function (cname, cvalue, exdays, exminutes,domain) {
        var d = new Date();
        if(exminutes){
            d.setTime(d.getTime() + (exminutes*60*1000));
        }else{
            if(typeof exdays=='object'){
                d = exdays;

            }
            else{
                d.setTime(d.getTime() + (exdays*24*60*60*1000));

            }

        }
        var expires = "expires="+ d.toUTCString();
        var cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        if(!domain)
        {
            if(window.location.hostname.indexOf('admicro.vn')===-1){
                domain = CRM_TRACKING_CLIENT.getDomainName(window.location.hostname);
            }
        }

        if(domain && window.location.protocol=='https:')
        {
            cookie+=';domain='+domain+'; SameSite=None; Secure';
        }
        document.cookie = cookie;
    },
    crm_removeCookie:function (cname) {
        var cookie = cname + "=" +  "; Expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/";
        let domain = '';
        if(window.location.hostname.indexOf('admicro.vn')===-1){
            domain = CRM_TRACKING_CLIENT.getDomainName(window.location.hostname);
        }
        if(domain && window.location.protocol=='https:')
        {
            cookie+=';domain='+domain+'; SameSite=None; Secure';
        }
        document.cookie = cookie;
    },
    base64UrlSafeEncode:function(str){
        return btoa(str).replace(/\//g, '_').replace(/\+/g, '-').replace(/\=/g,'');
    },
    safeDecode:function(str){
        if(!str) return '';
        if(str[0]==='['){
            return  str;
        }

        return atob(str.replace(/_/g, '/').replace(/-/g, '+'))
    },
    crm_getCookie:function (cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(unescape(document.cookie));
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    },

    getParameterByName:function (name,search) {
        if(!search)
        {
            search = location.search;
        }
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)","i"),
            results = regex.exec(search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    },
    getLocation (href) {
        var l = document.createElement("a");
        l.href = href;
        return l;
    },

    uuidv4() {
        return 'xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    },




     hashCode :function(str) {
         var i = str.length
         var hash1 = 5381
         var hash2 = 52711
         var hash3 = 527112

         while (i--) {
             const char = str.charCodeAt(i)
             hash1 = (hash1 * 33) ^ char
             hash2 = (hash2 * 33) ^ char
             hash3 = (hash3 * 33) ^ char

         }

         return ''+(hash1 >>> 0) * 4096 + (hash2 >>> 0)+(hash3 >>> 0)
    },
    hasUtm:function(utm){
       return utm&&(utm.utm_campaign || utm.utm_source||utm.utm_medium||utm.utm_content||utm.utm_term)
    },
    get_hash_key(utm){
        if(CRM_TRACKING_CLIENT.key_hash_info)
        {
            return true;
        }
        let date_ex = 10;
        let time = parseInt(Date.now()/1000/86400/date_ex);
        let key = utm &&(''+ String(utm.utm_campaign) +String(utm.utm_source)+String(utm.utm_medium)+String(utm.utm_content)+String(utm.utm_term)+String(utm.cid)+time);
        let key_no_utm = '';
        if(utm && utm.bfcd2)
        {
            key =''+key + utm.bfcd2;
            key_no_utm += utm.bfcd2;
        }

        if(!CRM_TRACKING_CLIENT.hasUtm(utm))
        {
            key =''+key + 'no_utm';

        }
        key_no_utm +=  'no_utm';


        key += '_' + 'first';
        let key_hash = '';
        key_hash = 'tracking_'+ CRM_TRACKING_CLIENT.hashCode(key);
        let key_hash_no_utm = 'tracking_'+ CRM_TRACKING_CLIENT.hashCode(key_no_utm);
        CRM_TRACKING_CLIENT.key_hash_info = {key_hash,key_hash_no_utm}
    },
    set_last_utm:function (key,utm){
        if(CRM_TRACKING_CLIENT.hasUtm(utm)){
            localStorage.setItem('last_utm',key);
        }


    },

    check_is_tracking:function(utm,is_set,step='')
    {

        if(document.location && document.location.hostname==='crm.bizfly.vn')
        {
            if(window.top === window.self)
            {

            }
            else{
                return  true;
            }
        }



        CRM_TRACKING_CLIENT.get_hash_key(utm)
        let key = CRM_TRACKING_CLIENT.key_hash_info.key_hash;

        if(is_set)
        {
            if(CRM_TRACKING_CLIENT.key_hash_info.key_hash)
            {
                localStorage.setItem(key,1);

            }
            if(CRM_TRACKING_CLIENT.hasUtm(utm)) {

                CRM_TRACKING_CLIENT.set_last_utm(key, utm);
            }

            let key_hash_no_utm = 'tracking_'+ CRM_TRACKING_CLIENT.hashCode(CRM_TRACKING_CLIENT.key_hash_info.key_hash_no_utm);
            localStorage.setItem(key_hash_no_utm,1);


        }
        else{
            let check  = localStorage.getItem(CRM_TRACKING_CLIENT.key_hash_info.key_hash);
            if(CRM_TRACKING_CLIENT.hasUtm(utm)){
                let last_utm = localStorage.getItem('last_utm');
                if(last_utm && last_utm!==key){
                    return false;
                }
                else{
                    return check;

                }
            }
            else{
                return check;

            }

        }

    },
    getUtmRow:function(search){
        var  utm_campaign =  CRM_TRACKING_CLIENT.getParameterByName('utm_campaign',search);
        var utm_source = CRM_TRACKING_CLIENT.getParameterByName('utm_source',search);
        var utm_medium = CRM_TRACKING_CLIENT.getParameterByName('utm_medium',search);
        var utm_content = CRM_TRACKING_CLIENT.getParameterByName('utm_content',search);
        var utm_term = CRM_TRACKING_CLIENT.getParameterByName('utm_term',search);
        var utm_referer = CRM_TRACKING_CLIENT.getParameterByName('utm_referer',search);



        let utm_tracking_row = {utm_campaign:utm_campaign,utm_source:utm_source,utm_medium:utm_medium,utm_content:utm_content,utm_term:utm_term,utm_referer:utm_referer};
        return utm_tracking_row;
    },
    getUtmAll:function()
    {
        let utm_tracking_row = CRM_TRACKING_CLIENT.getUtmRow();

        if(!CRM_TRACKING_CLIENT.hasUtm(utm_tracking_row))
        {
            /*lay utm refer*/
            if(document.referrer)
            {
                let location = CRM_TRACKING_CLIENT.getLocation(document.referrer);
                let search = location.search;
                utm_tracking_row = CRM_TRACKING_CLIENT.getUtmRow(search);
            }


        }
        return utm_tracking_row;
    },

    get_tracking_info:function()
    {
        var web_tracking_info = {};
        let utm_tracking_row = CRM_TRACKING_CLIENT.getUtmAll();


        web_tracking_info.url_ref = document.referrer;

        utm_tracking_row.cid =  CRM_TRACKING_CLIENT.getParameterByName('cid');
        web_tracking_info =  Object.assign(web_tracking_info,utm_tracking_row);


        web_tracking_info.domain = document.location.hostname;
        return {web_tracking_info,utm_tracking_row};
    },
    tracking_img(p,option)
    {
        let base_url = option.base_url;
        p.url = window.location.href;
        let url =   (base_url &&(base_url.replace(/\/$/,''))) + '/web_tracking/tracking?' + CRM_TRACKING_CLIENT._buildQueryString(p);

        CRM_TRACKING_CLIENT.tracking(url);



    },
    tracking(url){
        let img = document.createElement("img");
        img.referrerPolicy = 'no-referrer-when-downgrade';
        img.src = url;
        img.style.display = 'none';
        let src = document.body;
        src.appendChild(img);
    },
    track_submit(e){
        if(!e){
            e = '#FORM_ID_SS'
        }
        let url_ref = CRM_TRACKING_CLIENT.getParameterByName('url_ref');
        let search = location.search;
        try {
            let url_ref_link =   new URL(url_ref).search;
            let parent_url_ref = CRM_TRACKING_CLIENT.getParameterByName('url_ref',url_ref_link);
            if(parent_url_ref){
                url_ref = parent_url_ref;
                search = url_ref_link;
            }
        }
        catch (e) {

        }

        let form = $(e).closest('form');
        let ui = CRM_TRACKING_CLIENT.getParameterByName('ui',search);
        let dg = CRM_TRACKING_CLIENT.getParameterByName('dg',search);
        let dmi = CRM_TRACKING_CLIENT.getParameterByName('dmi',search);
        let lc = CRM_TRACKING_CLIENT.getParameterByName('lc',search);
        let ce = CRM_TRACKING_CLIENT.getParameterByName('ce',search);
        let cr = CRM_TRACKING_CLIENT.getParameterByName('cr',search);
        let bxid = CRM_TRACKING_CLIENT.getParameterByName('bxid',search);
        let ext = CRM_TRACKING_CLIENT.getParameterByName('ext',search);
        let iti = CRM_TRACKING_CLIENT.getParameterByName('iti',search);

        let dmn = '';
        let p = '';

        if(url_ref){
            dmn = CRM_TRACKING_CLIENT.getHostName(url_ref)
            p = CRM_TRACKING_CLIENT.getPath(url_ref)


        }

        if(!ui){
            let adm =  CRM_TRACKING_CLIENT.adm ;
            ui = adm && adm.uid;
            dg = adm && adm.dg;

        }


        let form_data = form && form.find('.crm-fieldset-edit input,.crm-fieldset-edit select').serializeJSON();

            let param = {
            ui,dg,dmi,lc,ce,cr,dmn,p,bxid,iti,ext,
            elbl:'crm.bizfly.form',
            eact:'bizflysubmit',
            eval: JSON.stringify(form_data && form_data.obj && form_data.obj.answers),
            ecat:  CrmBizflyServiceSdkInit.project_token,
            ecatName: CrmBizflyServiceSdkInit.project_name,
            };

        let url =   CRM_TRACKING_CLIENT.getAdmLogUrl()+ 'ev_anlz?'+ CRM_TRACKING_CLIENT._buildQueryString(param);
        CRM_TRACKING_CLIENT.tracking(url)


    },
    getHostName(link){
        try {
            return  new URL(link).hostname
        }
        catch (e) {

        }
    },
    getPath(link){
        try {
            return  new URL(link).pathname
        }
        catch (e) {

        }
    },
    getbfcd: function () {
    //let cookie = CRM_TRACKING_CLIENT.crm_getCookie('_bfcd');
    let _bfcd = [];
/*    if(cookie)
    {
        try {
            _bfcd = JSON.parse(cookie);

        }
        catch (e) {
            _bfcd = [];
        }
    }*/
    let _bfid2 = CRM_TRACKING_CLIENT.crm_getCookie('_bfid2');
    if(!_bfid2)
    {
        _bfid2 = CRM_TRACKING_CLIENT.uuidv4();
        CRM_TRACKING_CLIENT.crm_setCookie('_bfid2',_bfid2,365,false);

    }
    CRM_TRACKING_CLIENT.crm_cookies = CRM_TRACKING_CLIENT.__push_crm_cookies_to_c(CRM_TRACKING_CLIENT.crm_cookies, {"value":_bfid2,"domain": window.location.hostname});
    CRM_TRACKING_CLIENT.crm_setCookie('_bfcd',CRM_TRACKING_CLIENT.base64UrlSafeEncode(JSON.stringify(_bfcd)),365,false);
    return CRM_TRACKING_CLIENT.crm_cookies;

    },

    tracking_first:function()
    {
        let utm_tracking_row = CRM_TRACKING_CLIENT.getUtmAll();
        if(!CRM_TRACKING_CLIENT.hasUtm(utm_tracking_row)){
            return false;
        }

        let _bfcd = JSON.stringify(CRM_TRACKING_CLIENT.getbfcd());
        CRM_TRACKING_CLIENT.setCookieForm(_bfcd);

        setTimeout(function () {
            if(CRM_TRACKING_CLIENT.is_tracked)
            {
                return true;
            }
            let {project_token = '',base_url = ''} = TRACKING_BIZFLY_CRM || {};

            let {utm_tracking_row ={},web_tracking_info={}} = CRM_TRACKING_CLIENT.get_tracking_info() || {};


            if(CRM_TRACKING_CLIENT.check_is_tracking(utm_tracking_row,false,'first'))
            {
                return false;
            }
            CRM_TRACKING_CLIENT.set_tracking_id();
            CRM_TRACKING_CLIENT.tracking_img({
                project_token,
                data: {_cookies:_bfcd,web_tracking_info},
                tracking_id :CRM_TRACKING_CLIENT.tracking_id,
                crm_embed_key:CrmBizflyServiceSdkInit.crm_embed_key,
                crm_value:CrmBizflyServiceSdkInit.crm_value,
                crm_token:CrmBizflyServiceSdkInit.crm_token,
                c1:CRM_TRACKING_CLIENT.key_hash_info &&  CRM_TRACKING_CLIENT.key_hash_info.key_hash,
                c2:CRM_TRACKING_CLIENT.key_hash_info &&  CRM_TRACKING_CLIENT.key_hash_info.key_hash_no_utm
            },{base_url})

            CRM_TRACKING_CLIENT.check_is_tracking(utm_tracking_row,true,'first');
        },2000);

    },
    wait_and_run (condition,callback,option) {

    let time_start = Date.now();
    let time_out = option && option.time_out? option.time_out:20;

    let checkExist =  setInterval(function() {
        let con = condition();
        if (con ||  Date.now() - time_start>time_out*1000) {
            clearInterval(checkExist);
            if(con)
            {
                callback(option)
            }
            else{
                if(typeof  option.time_out_callback==='function')
                {
                    option.time_out_callback(option);
                }
            }
        }
    }, 200);
    },


    handleCross:function(evt) {
        //console.log('evt:', evt)

        //console.log('cross_event_data:', evt.data)
        if(['https://crm.bizfly.vn','https://crm.bizdev.vn','https://webpush.bizfly.vn','https://webpush.bizdev.vn','http://dev.bizdev.vn'].indexOf(evt &&evt.origin) !== -1) {
            if (typeof evt.data !== "undefined") {
                try {
                    let data = evt.data;
                    try {
                        data = JSON.parse(evt.data);
                    } catch (e) {

                    }
                    if (typeof data === 'object') {
                        if (typeof data.source !== 'undefined') {
                            if (data.source === 'crm.bizfly.vn') {
                                switch (data.actions) {
                                    case 'remove_sdk':
                                    case 'close_frame_sdk': {
                                        try {
                                            console.log(data, data);
                                            if (typeof data.list_link === "string" && data.list_link) {
                                                window.location.href = data.list_link;
                                                return;
                                            }
                                            if (document.getElementById('_CRM_BIZFLY_2_FRAME_CONTAINER_' + data.frame_id)) {
                                                _CRM_BIZFLY_CLIENT.popState(data.frame_id);
                                                _CRM_BIZFLY_CLIENT.removeElement('_CRM_BIZFLY_2_FRAME_CONTAINER_' + data.frame_id);
                                            } else if (document.getElementById('_CRM_FRAME_' + data.frame_id)) {
                                                _CRM_BIZFLY_CLIENT.popState(data.frame_id);
                                                _CRM_BIZFLY_CLIENT.removeElement('_CRM_FRAME_' + data.frame_id);
                                            } else {

                                                if (data.url) {
                                                    window.location.href = data.url;
                                                }
                                            }
                                            if (typeof data.todo !== 'undefined') {
                                                if (data.todo === 'sendmail_done') {
                                                    //Gửi mail thành công thì load loại activity
                                                    if (typeof RELOAD_TAB === "function") {
                                                        RELOAD_TAB();
                                                    } else {
                                                        document.getElementById(ID_IFRAME).contentWindow.RELOAD_TAB();
                                                    }
                                                }
                                            }
                                            if (data && data.callback_func) {
                                                if (typeof window[data.callback_func] === 'function') {
                                                    window[data.callback_func](data)
                                                }
                                            }
                                            return false;

                                        } catch (e) {
                                            //window.location.href = data.url;
                                        }
                                        break;
                                    }
                                    case 'getUTM': {
                                        try {
                                            let content_post_back = {
                                                'source': 'crm.bizfly.vn',
                                                'actions': 'returnGetUTM',
                                                'data': JSON.stringify(CRM_TRACKING_CLIENT.getUtm()),
                                                'option': data.option
                                            };
                                            if (typeof data.form_id !== "undefined") {
                                                document.getElementById(data.form_id).contentWindow.postMessage(JSON.stringify(content_post_back), '*');
                                            } else {
                                                document.getElementById('frame_embed_crm').contentWindow.postMessage(JSON.stringify(content_post_back), '*');
                                            }
                                        } catch (e) {
                                            console.log(e);
                                        }
                                        break;
                                    }
                                    case 'getCookieParent': {

                                        try {
                                            CRM_TRACKING_CLIENT.getCookies(1, function (c) {
                                                let content_post_back = {
                                                    'source': 'crm.bizfly.vn',
                                                    'actions': 'returnGetCookieParent',
                                                    'data': JSON.stringify(c),
                                                    'option': data.option
                                                };
                                                if (typeof data.form_id !== "undefined") {
                                                    document.getElementById(data.form_id).contentWindow.postMessage(JSON.stringify(content_post_back), '*');
                                                } else {
                                                    document.getElementById('frame_embed_crm').contentWindow.postMessage(JSON.stringify(content_post_back), '*');
                                                }
                                            });
                                        } catch (e) {
                                            console.log(e);
                                        }
                                        break;
                                    }
                                    case 'afterSubmitForm':
                                        try {
                                            if (typeof CRM_TRACKING_CLIENT.afterSubmitForm !== 'undefined' && typeof CRM_TRACKING_CLIENT.afterSubmitForm === "function") {
                                                CRM_TRACKING_CLIENT.afterSubmitForm(data);
                                            }
                                        } catch (e) {
                                            console.log(e);
                                        }
                                        break;
                                    case 'show_frame_sdk': {
                                        try {
                                            CRM_TRACKING_CLIENT.showForm(data.frame_link, data.options)
                                        } catch (e) {

                                        }
                                        break;
                                    }
                                    case 'returnGetCookies': {
                                        return CRM_TRACKING_CLIENT.tracking_client_return(data)

                                    }
                                }
                            }
                        }
                    }
                } catch (e) {
                    console.log(e)
                }

            } else {

            }
        }

    },
    init : ()=>{
        CRM_TRACKING_CLIENT.track_error();
        if (window.addEventListener) {
            window.addEventListener("message", CRM_TRACKING_CLIENT.handleCross);
        } else {
            window.attachEvent("onmessage", CRM_TRACKING_CLIENT.handleCross);
        }
        CRM_TRACKING_CLIENT.set_tracking_id();
        CRM_TRACKING_CLIENT.tracking_first();

        CRM_TRACKING_CLIENT.tracking_client();
        CRM_TRACKING_CLIENT.addCssToSite('https://crm.bizfly.vn/bizfly-client/style.css?ver=3');

        CRM_TRACKING_CLIENT.getCookies(2,function (c){
            CRM_TRACKING_CLIENT.setCookieForm(c);
        });


    },
    setCookieForm:function (_bfcd) {
        let cookie = '';
        if(_bfcd)
        {
            cookie = _bfcd;
        }
        else {
            CRM_TRACKING_CLIENT.safeDecode(CRM_TRACKING_CLIENT.crm_getCookie('_bfcd'))
        }
        let forms = document.getElementsByTagName('form');
        for(var i in forms)
        {

            for(let form of forms)
            {
                if(form&&( form.method=='POST' ||  form.method=='post'))
                {
                    ///cần : selector thằng .js_cookie để xóa đi
                    var _check = form.querySelectorAll('input[name="_cookies"]');
                    if(_check && _check.length>0){
                        for(let check of _check){
                            check.value = cookie;
                            check.style = "display:none";
                        }

                    }
                    else{
                        if(CRM_TRACKING_CLIENT.is_ladipage()){
                            CRM_TRACKING_CLIENT.push_ladipage_form(form,cookie)
                        }
                        else{
                            let input =  document.createElement('input');
                            input.className = "js_cookies";
                            input.name = "_cookies";
                            input.value = cookie;
                            input.style = "display:none";

                            form.appendChild(input)
                        }

                    }


                }

            }
        }


    },
    is_ladipage(){
        return typeof LadiPageScript != "undefined" ;
    },

    push_ladipage_form(form,cookie){
        let input_item = `<div class="ladi-element" style="display: none"><div class="ladi-form-item-container"><div class="ladi-form-item"><input class="js_cookies" type="hidden" name="_cookies" value="${cookie}"/></div></div></div>`
        form && form.insertAdjacentHTML('beforeend', input_item)
    },
    set_tracking_id()
    {
        if(!CRM_TRACKING_CLIENT.tracking_id)
        {
            CRM_TRACKING_CLIENT.tracking_id = CRM_TRACKING_CLIENT.uuidv4();

        }
    },

    tracking_client_return:function(data)
    {

        let {project_token = '',base_url = ''} = TRACKING_BIZFLY_CRM || {};
        let bfcd = data&&data.data&& data.data.bfcd;
        if(bfcd)
        {

            bfcd = CRM_TRACKING_CLIENT.push_crm_cookies_to_c(JSON.parse(bfcd));
            bfcd = JSON.stringify(bfcd)
            CRM_TRACKING_CLIENT.setCookieForm(bfcd);

            CRM_TRACKING_CLIENT.crm_setCookie('_bfcd',CRM_TRACKING_CLIENT.base64UrlSafeEncode(bfcd),365);

            let {utm_tracking_row ={},web_tracking_info={}} = CRM_TRACKING_CLIENT.get_tracking_info() || {};
            if(utm_tracking_row){
                utm_tracking_row.bfcd2 = 'bfcd2';
            }
            if(CRM_TRACKING_CLIENT.check_is_tracking(utm_tracking_row,false,''))
            {
                return false;
            }
            CRM_TRACKING_CLIENT.set_tracking_id();
            CRM_TRACKING_CLIENT.tracking_img({
                project_token,
                data: {_cookies:bfcd,web_tracking_info},
                tracking_id : CRM_TRACKING_CLIENT.tracking_id,
                crm_embed_key:CrmBizflyServiceSdkInit.crm_embed_key,
                crm_value:CrmBizflyServiceSdkInit.crm_value,
                crm_token:CrmBizflyServiceSdkInit.crm_token,
                c1:CRM_TRACKING_CLIENT.key_hash_info &&  CRM_TRACKING_CLIENT.key_hash_info.key_hash,
                c2:CRM_TRACKING_CLIENT.key_hash_info &&  CRM_TRACKING_CLIENT.key_hash_info.key_hash_no_utm

            },{base_url});
            CRM_TRACKING_CLIENT.is_tracked = true;

            CRM_TRACKING_CLIENT.check_is_tracking(utm_tracking_row,true,'');
        }



    },
    tracking_client:function(){
        let id  = 'iframe_get_cookies';
        let ifrm = document.getElementById(id);
        let {project_token = '',base_url = ''} = TRACKING_BIZFLY_CRM || {};

        if(!ifrm)
        {
            ifrm = document.createElement("iframe");
            ifrm.id = id;
            ifrm.style.display = 'none';

            ifrm.src =  base_url &&(base_url.replace(/\/$/,'') + '/web_tracking/getCookies');
            if(!document.body)
            {
               setTimeout(function () {
                    document.body && document.body.appendChild(ifrm);
                    CRM_TRACKING_CLIENT.tracking_on_load(ifrm);
                },1000) ;
            }
            else{
                document.body && document.body.appendChild(ifrm);
                CRM_TRACKING_CLIENT.tracking_on_load(ifrm);

            }

        }



    },
    tracking_on_load:function(ifrm){
        ifrm.addEventListener("load", function () {
            let content_post_back = {
                'source': 'crm.bizfly.vn',
                'actions': 'getCookies',
                options: {},
            };
            ifrm.contentWindow.postMessage(content_post_back, '*')
        });
    },
    setUtm:function()
    {

    },
    track_error :function()
    {
        if(CRM_TRACKING_CLIENT.getParameterByName('log_error')==1 || typeof  CrmBizflyWebConfig !='undefined' && CrmBizflyWebConfig && CrmBizflyWebConfig.services&& CrmBizflyWebConfig.services.track_error )
        {
            window.onerror = function(msg, source, lineno, colno, error) {

                if(error)
                {
                    var message = btoa(msg+'\n'+source+'\n'+lineno+'\n'+colno+'\n'+error);

                    CRM_TRACKING_CLIENT.tracking('/_track-error-client?' + 'msg='+message+'&t='+Date.now());
                }
            }
        }

    },
    getUtm:function(key){


        let utm_tracking = [];

        let utm_tracking_row = CRM_TRACKING_CLIENT.getUtmAll();
        if(CRM_TRACKING_CLIENT.hasUtm(utm_tracking_row))
        {
            utm_tracking.push(utm_tracking_row);
        }
        return utm_tracking;

    },
    getCookies(mode =0,callback ){


        let c =  [];
        CRM_TRACKING_CLIENT.wait_and_run(function () {
                if(CRM_TRACKING_CLIENT.crm_cookies!==null)
                {
                    return true;
                }
                else{

                }
                return false;
            },
            function () {

                c = CRM_TRACKING_CLIENT.push_crm_cookies_to_c(c);
                CRM_TRACKING_CLIENT.crm_setCookie('_bfcd',CRM_TRACKING_CLIENT.base64UrlSafeEncode(JSON.stringify(c)),365);
                if(typeof callback==='function')
                {
                    callback(JSON.stringify(c))
                }
            },
            {
                time_out:4,
                time_out_callback:function () {

                    c = CRM_TRACKING_CLIENT.push_crm_cookies_to_c(c);
                    CRM_TRACKING_CLIENT.crm_setCookie('_bfcd',CRM_TRACKING_CLIENT.base64UrlSafeEncode(JSON.stringify(c)),365);
                    if(typeof callback==='function')
                    {
                        callback(JSON.stringify(c))
                    }
                }
            }
        );

    },
    getCookiesAdm(){
        let adm = null;
        CRM_TRACKING_CLIENT.wait_and_run(function () {

                if(typeof getinfoAdm =='function' && document.body )
                {
                    try{
                        adm = getinfoAdm();
                    }
                    catch (e) {
                        
                    }
                   
                    CRM_TRACKING_CLIENT.adm = adm;
                    return adm && adm.uid;
                }
                else{

                }
                return false;
            },
            function () {
                let bfcd = [{value: adm && adm.uid,domain: location && location.hostname,"partner":"Admicro"}];
                bfcd = CRM_TRACKING_CLIENT.push_crm_cookies_to_c(bfcd);
                CRM_TRACKING_CLIENT.crm_setCookie('_bfcd',CRM_TRACKING_CLIENT.base64UrlSafeEncode(JSON.stringify(bfcd)),365);
                CRM_TRACKING_CLIENT.setCookieForm(JSON.stringify(bfcd));
                CRM_TRACKING_CLIENT.trackingAdm();
                CRM_TRACKING_CLIENT.trackingAdmCookies();

            },
            {
                time_out:20,
                time_out_callback:function () {

                }
            }
        );
    },
    trackingAdm(){
        if(!CRM_TRACKING_CLIENT.is_tracked)
        {
            return false;
        }
        let {project_token = '',base_url = ''} = TRACKING_BIZFLY_CRM || {};

        CRM_TRACKING_CLIENT.set_tracking_id();
        CRM_TRACKING_CLIENT.tracking_img({
            project_token,
            data: {_cookies:CRM_TRACKING_CLIENT.crm_cookies},
            tracking_id :CRM_TRACKING_CLIENT.tracking_id,
            type:'update_cookies'
        },{base_url})

    },
    trackingAdmCookies(){
        let param = CRM_TRACKING_CLIENT.adm;
        param = Object.assign(param,
            {
                elbl:'crm.bizfly.tracking',
                eact:'bizflytracking',
                eval: JSON.stringify({_cookies:CRM_TRACKING_CLIENT.crm_cookies}),
                ecat:  CrmBizflyServiceSdkInit.project_token,
                ecatName: CrmBizflyServiceSdkInit.project_name,
            }
        );

        let url =   CRM_TRACKING_CLIENT.getAdmLogUrl()+ 'ev_anlz?'+ CRM_TRACKING_CLIENT._buildQueryString(param);
        CRM_TRACKING_CLIENT.tracking(url);
    },

    loadJS : function(url, callback,check){

        if(typeof check!='undefined' &&   eval('typeof '+check +" !='undefined'")){
            return callback();
        }

        var scriptTag = document.createElement('script');
        url = url &&  url.indexOf('?')!==-1? url : url  +'?v='+parseInt(new Date().getTime()/60/60/1000);

        scriptTag.src = url;
        scriptTag.async = true;
        scriptTag.onload = callback;
        scriptTag.onreadystatechange = callback;

        document.body.appendChild(scriptTag);
    },
    addCssToSite: function(url) {
        var link = document.createElement('link');
        link.href = url;
        link.rel = 'stylesheet';
        link.id = btoa(url);
        link.type = 'text/css'; // no need for HTML5
        document.getElementsByTagName('head')[0].appendChild(link); // for IE6
    },
    _CRM_BIZFLY_COUNT_UNIQUE:0,
    _ROOT_ID : '_CRM_BIZFLY_VN_ROOT',
    showForm(link, options) {

        let root_element = document.getElementById(CRM_TRACKING_CLIENT._ROOT_ID);
        if(!root_element)
        {
            var _CRM_BIZFLY_VN_ROOT = document.createElement("div")
            _CRM_BIZFLY_VN_ROOT.id = CRM_TRACKING_CLIENT._ROOT_ID;
            document.body.appendChild(_CRM_BIZFLY_VN_ROOT);
        }


        window.currentEditing = window.currentEditing || {};
        if (typeof options === "undefined") {
            options = {};
        }
        CRM_TRACKING_CLIENT._CRM_BIZFLY_COUNT_UNIQUE++;
        let id = btoa('ngannv_' + CRM_TRACKING_CLIENT._CRM_BIZFLY_COUNT_UNIQUE).replace('=','');

        try {
            document.getElementById('_CRM_BIZFLY_2_FRAME_CONTAINER_' + id).remove();
        } catch (e) {

        }

        let zIndex = 100000 + CRM_TRACKING_CLIENT._CRM_BIZFLY_COUNT_UNIQUE;

        let ifrm = document.createElement("iframe");
        let _link = link;
        if (_link.indexOf('?') === -1) {
            _link = link + '?frame_id=' + id
        } else {
            _link = link + '&frame_id=' + id
        }
        ifrm.setAttribute("src", _link);


        ifrm.setAttribute("id", '_CRM_FRAME_' + id);
        if(link.indexOf('dev.bizdev.vn')!==-1 || link.indexOf('crm.bizfly.vn')!==-1 || link.indexOf('crm.bizdev.vn')!==-1){
            ID_IFRAME = '_CRM_FRAME_' + id;
        }
        ifrm.className = "_CRM_FRAME";
        ifrm.style.border = "0";
        ifrm.style.width = typeof options.frame_width !== "undefined" ? options.frame_width : "100%";
        ifrm.style.height = typeof options.frame_height !== "undefined" ? options.frame_height : "480px";
        ifrm.style.marginTop = typeof options.frame_marginTop !== "undefined" ? options.frame_marginTop : "unset";
        zIndex++;
        ifrm.style.zIndex = zIndex + 10;

        let frameContainer = document.createElement("div")
        frameContainer.id = '_CRM_BIZFLY_2_FRAME_CONTAINER_' + id;
        frameContainer.style.zIndex = zIndex - 10;
        document.getElementById('_CRM_BIZFLY_VN_ROOT').appendChild(frameContainer);

        let contentContainer = document.createElement("div")
        contentContainer.className = typeof options.container_class !== "undefined" ? options.container_class : '_CRM_CONTENT_CONTAINER';
        zIndex++;
        contentContainer.style.zIndex = zIndex + 1;
        frameContainer.appendChild(contentContainer);

        let loader = document.createElement("div")
        loader.className = '_CRM_LOADER cl1252';
        zIndex++;
        loader.style.zIndex = zIndex + 1;
        contentContainer.appendChild(loader);


        contentContainer.appendChild(ifrm);
        let iframeLoaded = false;
        ifrm.addEventListener("load", function () {
            loader.style.display = 'none';
            iframeLoaded = true;
            if (typeof options.content_post_back !== "undefined") {
                ifrm.contentWindow.postMessage(options.content_post_back, '*')
            }
        });

        let overlay = document.createElement("div");
        overlay.className = typeof options.overlay_class !== "undefined" ? options.overlay_class : '_CRM_OVERLAY';
        overlay.style.zIndex = zIndex - 1;
        overlay.addEventListener("click", function () {
            var currentEditing = localStorage.getItem('CheckEditing');
            if(currentEditing !== null){
                currentEditing = JSON.parse(currentEditing);
                currentEditing = currentEditing[id];
                if(typeof allow_to_close_without_saving ==='function'){
                    if(!allow_to_close_without_saving(currentEditing)){
                        return false
                    }
                }
            }
            localStorage.removeItem('CheckEditing');
            if (iframeLoaded === true) {
                if (overlay.className === '_CRM_OVERLAY') {

                    // if (document.getElementById('_CRM_BIZFLY_VN_ROOT').hasChildNodes(frameContainer)) {
                    //     document.getElementById('_CRM_BIZFLY_VN_ROOT').removeChild(frameContainer);
                    //
                    // }
                    try{
                        if (frameContainer && frameContainer.closest('#_CRM_BIZFLY_VN_ROOT') && frameContainer.closest('#_CRM_BIZFLY_VN_ROOT').length) {
                            document.getElementById('_CRM_BIZFLY_VN_ROOT').removeChild(frameContainer);
                        }else if(frameContainer && document.getElementById('_CRM_BIZFLY_VN_ROOT') && document.getElementById('_CRM_BIZFLY_VN_ROOT').hasChildNodes(frameContainer)) {
                            document.getElementById('_CRM_BIZFLY_VN_ROOT').removeChild(frameContainer);
                        }
                    }catch(err){
                        //không làm gì cả
                        console.log(err)
                    }

                } else {
                    // if (confirm("Bạn muốn rời khỏi trang này?")) {
                    //     document.getElementById('_CRM_BIZFLY_VN_ROOT').removeChild(frameContainer);
                    // }
                }

            }
        });
        frameContainer.appendChild(overlay);
        if(typeof options.close !== "undefined" && options.close){
            let closeIframe = document.createElement("div");
            closeIframe.className = '_CRM_CLOSE';
            closeIframe.title = 'Đóng iframe';
            closeIframe.style.zIndex = zIndex;
            closeIframe.innerHTML = '<i class="icon-arrow-right32"></i><i class="icon-arrow-left32"></i>';
            closeIframe.addEventListener("click", function () {
                if (iframeLoaded === true) {
                    // if (document.getElementById('_CRM_BIZFLY_VN_ROOT').hasChildNodes(frameContainer)) {
                    //     document.getElementById('_CRM_BIZFLY_VN_ROOT').removeChild(frameContainer);
                    // }
                    try{
                        if (frameContainer && frameContainer.closest('#_CRM_BIZFLY_VN_ROOT') && frameContainer.closest('#_CRM_BIZFLY_VN_ROOT').length) {
                            document.getElementById('_CRM_BIZFLY_VN_ROOT').removeChild(frameContainer);
                        }else if(frameContainer && document.getElementById('_CRM_BIZFLY_VN_ROOT') && document.getElementById('_CRM_BIZFLY_VN_ROOT').hasChildNodes(frameContainer)) {
                            document.getElementById('_CRM_BIZFLY_VN_ROOT').removeChild(frameContainer);
                        }
                    }catch(err){
                        //Không làm gì cả
                        console.log(err)
                    }

                }
            });
            frameContainer.appendChild(closeIframe);
        }
        return ifrm;
    },
    showFrame(frame_link, options) {
        let content_post_back = {
            'source': 'crm.bizfly.vn',
            'actions': 'show_frame_sdk',
            'frame_link': frame_link,
            options: options,
        };
        parent.window.postMessage(JSON.stringify(content_post_back), '*');
    },
    fetch(url,d){
        d = Object.assign({
            method: "POST",
            headers: {
                "Content-Type": "application/json;charset=UTF-8",
                "Access-Control-Allow-Origin": "*"
            },
            cache: "no-cache",
            mode: 'cors',
        },d);
        try {
            return fetch(url, d)

        }
        catch (e){
            console.log(e.getMessage())
        }
    }



};

