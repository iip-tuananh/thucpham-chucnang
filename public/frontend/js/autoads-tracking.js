var aaTrackSettings = [
    {
        domain: 'autoads.asia',
        fields: [
            {
                selector: '#emailRegis',
                name: 'Email'
            },
            {
                selector: '#telephone',
                name: 'Phone'
            }
        ],
        trigger: {
            //selector: '#btnRegis',
            success: {
                url: 'https://autoads.asia/RegisTration/Create',
                response: 'code',
                operator: '==',
                value: 1
            },
        }
    },
    {
        domain: 'onfluencer.net',
        fields: [
            {
                selector: '#formRegister_txtuser',
                name: 'Email'
            },
            {
                selector: '#formRegister_txtphonenumber',
                name: 'Phone'
            }
        ],
        trigger: {
            //selector: '#btnFormRegister',
            success: {
                url: 'https://onfluencer.net/api/account/advertiser',
                response: 'meta.code',
                operator: '==',
                value: 200
            },
        }
    },
    {
        domain: 'livechat.oncustomer.asia',
        fields: [
            {
                selector: '#normal_login_companyName',
                name: 'Company'
            },
            {
                selector: '#normal_login_email',
                name: 'Email'
            },
            {
                selector: '#normal_login_phone',
                name: 'Phone'
            }
        ],
        trigger: {
            //selector: '.login-form-button',
            success: {
                url: 'https://api-internal.oncustomer.asia/user/auth/register',
                response: 'token',
                operator: '!=',
                value: undefined
            },
        }
    },
    {
        domain: 'landingpage.novaonx.com',
        fields: [
            {
                selector: '.placeholderColor4804695',
                name: 'Email'
            },
            {
                selector: '.placeholderColor4804695',
                name: 'Phone'
            }
        ],
        trigger: {
            //selector: '.login-form-button',
            success: {
                url: 'https://api-ldp.novaonx.com',
                response: 'data',
                operator: '!=',
                value: null
            },
        }
    },
];
var aaTrackSetting = aaTrackSettings.find(x => x.domain === window.location.hostname);
var aatDebug = false;
(function () {
    if (!aaTrackSetting) {
        //console.log(window.location.hostname + ' not exists!');
        return;
    }

    aatDebug = document.location.toString().toLowerCase().includes('aat_debug=true');
    console.log('Init tracking...!');

    var existsSubmitData = localStorage.getItem('__autoads_tracking_data');
    if (existsSubmitData) {
        aaTrackingSubmit(existsSubmitData);
    }

    function aaSubmitFired() {
        try {
            aaTrackSetting.fields.forEach(function (field, index) {
                if (field.selector.includes('#')) {
                    var el = document.getElementById(field.selector.replace('#', ''));
                    if (el != null) {
                        field.value = el.value;
                    } else if (aatDebug) console.log(field.name + '(' + field.selector + ') not exists!');
                }
                //if (jQueryautoAdsMaxLead(field.selector).length == 0) {
                //    console.log(field.name + '(' + field.selector + ') not exists!');
                //} else field.value = jQueryautoAdsMaxLead(field.selector).val();
            });
            if (aatDebug) console.log('Tracking submit: ', { ...aaTrackSetting.fields });
        } catch (err) {
            console.log('Error in aaSubmitFired: ', err.toString())
        }
    }

    function aaRegisterTracking() {
        //For XMLHttpRequest
        var origOpen = XMLHttpRequest.prototype.open;
        XMLHttpRequest.prototype.open = function () {
            aaSubmitFired();
            this.addEventListener('load', function () {
                try {
                    var url = this.responseURL.toLowerCase();
                    if (aatDebug) {
                        console.log('XHR: ', url);
                        sessionStorage.setItem('__autoads_tracking_xhr_url', url);
                    }

                    if (this.readyState === 4 && url.indexOf(aaTrackSetting.trigger.success.url.toLowerCase()) === 0) {
                        var responseJSON = JSON.parse(this.response);
                        sessionStorage.setItem('__autoads_tracking_xhr_response', JSON.stringify(responseJSON));
                        console.log('Response value for aaTrackSetting: ', eval('responseJSON.' + aaTrackSetting.trigger.success.response));
                        var isSuccess = eval('responseJSON.' + aaTrackSetting.trigger.success.response + aaTrackSetting.trigger.success.operator + aaTrackSetting.trigger.success.value);
                        if (isSuccess) {
                            var submitData = { ...aaTrackSetting.fields };
                            localStorage.setItem('__autoads_tracking_data', JSON.stringify(submitData));
                            aaTrackingSubmit(JSON.stringify(submitData));
                        }
                    }
                } catch (err) {
                    console.log('Error in xhr load: ', err.toString())
                }
            });
            origOpen.apply(this, arguments);
        };

        //For fetch
        //var constantMock = window.fetch;
        //window.fetch = function () {
        //    console.log(arguments);
        //    return new Promise((resolve, reject) => {
        //        constantMock.apply(this, arguments)
        //            .then((response) => {
        //                console.log(response);
        //                resolve(response);
        //            })
        //            .catch((error) => {
        //                reject(response);
        //            })
        //    });
        //}
    }

    function aaSendPost(url, param, callback) { aaSendXMLHttpRequest(url, 'POST', param, callback); }

    function aaSendXMLHttpRequest(url, method, param, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open(method, url);
        if (method === 'POST') xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

        xhr.responseType = 'json';
        xhr.onload = function (e) {
            if (xhr.status != 200) console.log('Request Error: ' + url, xhr.status + '-' + xhr.statusText);

            if (typeof (callback) === 'function') callback(this.response);
        };
        xhr.onerror = function () {
            console.log('Request Error: ' + url, JSON.stringify(xhr));
        };

        if (param) xhr.send(JSON.stringify({ ...param }));
        else xhr.send();
    }

    function aaTrackingSubmit(submitData) {
        console.log('aaTrackingSubmit: ', submitData);
        aaSendPost('https://alpha2.autoads.asia/api/tracking/collect', { Data: submitData }, function (response) {
            if (response === true) {
                localStorage.removeItem('__autoads_tracking_data');
                console.log('Tracking Form Submit Success!');
            }
        });
    }

    aaRegisterTracking();
})();