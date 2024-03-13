"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[289],{393:(e,r,t)=>{t.d(r,{Z:()=>o});var l=t(5548),n=["for"],a=["id","type","value","required","name"],s={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"};const o={__name:"CustomInput",props:["modelValue","type","name","errors","label","required"],emits:["update:modelValue"],setup:function(e,r){var t=r.emit,o=e,i=(0,l.iH)(null);(0,l.bv)((function(){i.value.hasAttribute("autofocus")&&i.value.focus()}));var u=function(e){o.errors&&o.errors[o.name]&&(o.errors[o.name]=""),t("update:modelValue",e.target.value)};return function(r,t){return(0,l.wg)(),(0,l.iD)("div",null,[(0,l._)("label",{for:e.name,class:(0,l.C_)(["block mb-2 text-sm font-medium text-gray-900",{"text-red-700":e.errors&&e.errors[e.name]}])},(0,l.zw)(e.label),11,n),(0,l._)("input",{ref_key:"input",ref:i,id:e.name,type:e.type,value:e.modelValue,required:e.required,name:e.name,onInput:u,class:(0,l.C_)(["bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5",{"bg-red-50 border border-red-500 text-red-900 placeholder-red-700":e.errors&&e.errors[e.name]}])},null,42,a),e.errors&&e.errors[e.name]?((0,l.wg)(),(0,l.iD)("p",s,(0,l.zw)(e.errors[e.name]),1)):(0,l.kq)("",!0)])}}}},7793:(e,r,t)=>{t.d(r,{Z:()=>o});var l=t(5548),n=["for"],a=["id","value"],s={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"};const o={__name:"CustomTextarea",props:["modelValue","name","errors","label"],emits:["update:modelValue"],setup:function(e,r){var t=r.emit,o=e,i=(0,l.iH)(null);(0,l.bv)((function(){i.value.hasAttribute("autofocus")&&i.value.focus()}));var u=function(e){o.errors&&o.errors[o.name]&&(o.errors[o.name]=""),t("update:modelValue",e.target.value)};return function(r,t){return(0,l.wg)(),(0,l.iD)("div",null,[(0,l._)("label",{for:e.name,class:(0,l.C_)(["block mb-2 text-sm font-medium text-gray-900",{"text-red-700":e.errors[e.name]}])},(0,l.zw)(e.label),11,n),(0,l._)("textarea",{ref_key:"input",ref:i,id:e.name,value:e.modelValue,onInput:u,rows:"6",class:(0,l.C_)(["bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5",{"bg-red-50 border border-red-500 text-red-900 placeholder-red-700":e.errors[e.name]}])},null,42,a),e.errors[e.name]?((0,l.wg)(),(0,l.iD)("p",s,(0,l.zw)(e.errors[e.name]),1)):(0,l.kq)("",!0)])}}}},2638:(e,r,t)=>{t.d(r,{Z:()=>i});var l=t(5548),n=t(8748),a={key:0},s=(0,l._)("div",{class:"font-medium text-red-600"},"Whoops! Something went wrong.",-1),o={class:"mt-3 list-disc list-inside text-sm text-red-600"};const i={__name:"ValidationErrors",setup:function(e){var r=(0,l.Fl)((function(){return(0,n.qt)().props.errors})),t=(0,l.Fl)((function(){return Object.keys(r.value).length>0}));return function(e,n){return(0,l.SU)(t)?((0,l.wg)(),(0,l.iD)("div",a,[s,(0,l._)("ul",o,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)((0,l.SU)(r),(function(e,r){return(0,l.wg)(),(0,l.iD)("li",{key:r},(0,l.zw)(r)+": "+(0,l.zw)(e),1)})),128))])])):(0,l.kq)("",!0)}}}},7864:(e,r,t)=>{t.d(r,{Z:()=>E});var l=t(5548),n=t(8748),a=(0,l.uE)('<div class="sidebar-header w-80 flex items-center justify-center py-4"><div class="inline-flex"><a href="#" class="inline-flex flex-row items-center"><svg class="w-10 h-10 text-red-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.757 2.034a1 1 0 01.638.519c.483.967.844 1.554 1.207 2.03.368.482.756.876 1.348 1.467A6.985 6.985 0 0117 11a7.002 7.002 0 01-14 0c0-1.79.684-3.583 2.05-4.95a1 1 0 011.707.707c0 1.12.07 1.973.398 2.654.18.374.461.74.945 1.067.116-1.061.328-2.354.614-3.58.225-.966.505-1.93.839-2.734.167-.403.356-.785.57-1.116.208-.322.476-.649.822-.88a1 1 0 01.812-.134zm.364 13.087A2.998 2.998 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879.586.585.879 1.353.879 2.121s-.293 1.536-.879 2.121z" clip-rule="evenodd"></path></svg><span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">DForce admin</span></a></div></div>',1),s={class:"sidebar-content px-4 py-6"},o={class:"flex flex-col w-full"},i={class:"my-px"},u={key:0},d=["onClick"],c=(0,l._)("span",{class:"flex items-center justify-center text-lg text-gray-400"},[(0,l._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,l._)("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})])],-1),m={class:"ml-3"},g=(0,l._)("svg",{class:"w-6 h-6 ml-auto",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[(0,l._)("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),f={key:0,class:"bg-white rounded-lg"},x={class:"my-px"},p={key:1},v=(0,l._)("span",{class:"flex items-center justify-center text-lg text-gray-400"},[(0,l._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,l._)("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})])],-1),w={class:"ml-3"},b={key:1,class:"flex font-medium text-sm text-gray-300 px-4 my-4 uppercase"},h={class:"my-px"},_=["href"],y=[(0,l._)("span",{class:"flex items-center justify-center text-lg text-red-400"},[(0,l._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,l._)("path",{d:"M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"})])],-1),(0,l._)("span",{class:"ml-3"},"Logout",-1)];const k={__name:"Sidebar",setup:function(e){var r=(0,l.iH)(!1),t=route().current(),k=(0,l.iH)(!1),C=(0,l.iH)([{route:"admin.dashboard",group:"admin.dashboard",title:"Головна"},{route:"admin.translations.index",group:"admin.translations",title:"Переклади"},{route:"admin.settings.index",group:"admin.settings",title:"Додаткові змінні"},{route:null,title:"Контент"},{route:"admin.banners.index",group:"admin.banners.index",title:"Банери"},{route:"admin.sliders.index",group:"admin.sliders.index",title:"Слайдери"},{route:"admin.file-manager",group:"admin.file-manager",title:"Файловий менеджер"},{route:"admin.seo-rule.index",group:"admin.seo-rule",title:"SEO правила"},{route:"admin.links.index",group:"admin.links",title:"Посилання"},{route:"admin.menu.index",group:"admin.menu",title:"Меню"},{route:null,title:"Управління"},{route:"admin.users.index",group:"admin.users",title:"Користувачі"},{route:"admin.roles.index",group:"admin.roles",title:"Ролі"}]);return(0,l.bv)((function(){})),function(e,S){return(0,l.wg)(),(0,l.iD)("aside",{class:(0,l.C_)(["sidebar w-80 md:shadow transform md:translate-x-0 transition-transform duration-150 ease-in bg-slate-500",{"-translate-x-full":!r.value}])},[a,(0,l._)("div",s,[(0,l._)("ul",o,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(C.value,(function(r){return(0,l.wg)(),(0,l.iD)("li",i,[r.sublist&&r.sublist.length>0?((0,l.wg)(),(0,l.iD)("div",u,[(0,l._)("div",{class:(0,l.C_)(["flex flex-row items-center h-10 px-3 rounded-lg cursor-pointer",{"text-gray-700 bg-gray-100":(0,l.SU)(t).includes(r.group),"text-gray-300 hover:bg-gray-100 hover:text-gray-700":!(0,l.SU)(t).includes(r.group)}]),onClick:function(e){return t=r.group,void(k.value===t?k.value=!1:k.value=t);var t}},[c,(0,l._)("span",m,(0,l.zw)(r.title),1),g],10,d),r.sublist&&r.sublist.length>0?(0,l.wy)(((0,l.wg)(),(0,l.iD)("ul",f,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(r.sublist,(function(r){return(0,l.wg)(),(0,l.iD)("li",x,[(0,l.Wm)((0,l.SU)(n.rU),{href:e.route(r.route,r.routeParams||[]),class:"flex flex-row items-center h-10 px-3 rounded-lg"},{default:(0,l.w5)((function(){return[(0,l._)("span",{class:(0,l.C_)(["ml-3",{"text-white bg-slate-500 rounded-lg px-3 w-full":(0,l.SU)(t)===r.route}])},(0,l.zw)(r.title),3)]})),_:2},1032,["href"])])})),256))],512)),[[l.F8,k.value===r.group]]):(0,l.kq)("",!0)])):((0,l.wg)(),(0,l.iD)("div",p,[r.route?((0,l.wg)(),(0,l.j4)((0,l.SU)(n.rU),{key:0,href:e.route(r.route),class:(0,l.C_)(["flex flex-row items-center h-10 px-3 rounded-lg",{"text-gray-700 bg-gray-100":(0,l.SU)(t).includes(r.group),"text-gray-300 hover:bg-gray-100 hover:text-gray-700":!(0,l.SU)(t).includes(r.group)}])},{default:(0,l.w5)((function(){return[v,(0,l._)("span",w,(0,l.zw)(r.title),1)]})),_:2},1032,["href","class"])):((0,l.wg)(),(0,l.iD)("span",b,(0,l.zw)(r.title),1))]))])})),256)),(0,l._)("li",h,[(0,l._)("a",{href:e.route("logout"),class:"flex flex-row items-center w-full h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"},y,8,_)])])])],2)}}};var C=(0,l._)("svg",{"aria-hidden":"true",class:"flex-shrink-0 w-5 h-5",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[(0,l._)("path",{"fill-rule":"evenodd",d:"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z","clip-rule":"evenodd"})],-1),S=(0,l._)("span",{class:"sr-only"},"Info",-1),D={class:"ml-3 text-sm font-medium"},U=(0,l._)("span",{class:"text-green-800 text-red-800 text-yellow-800 bg-green-50 bg-yellow-50 bg-red-50"},null,-1);const z={__name:"Alert",setup:function(e){var r=(0,l.Fl)((function(){return(0,n.qt)().props.flash.message}));return function(e,t){return(0,l.SU)(r).text?((0,l.wg)(),(0,l.iD)("div",{key:0,class:(0,l.C_)(["flex p-4 mb-4 rounded-lg","text-".concat((0,l.SU)(r).status,"-800 bg-").concat((0,l.SU)(r).status,"-50")]),role:"alert"},[C,S,(0,l._)("div",D,(0,l.zw)((0,l.SU)(r).text),1),U],2)):(0,l.kq)("",!0)}}};var V={class:"flex flex-row min-h-screen bg-gray-100 text-gray-800"},M={class:"main flex flex-col flex-grow -ml-80 md:ml-0 transition-all duration-150 ease-in"},j={class:"header bg-white shadow py-4 px-4"},H={class:"header-content flex items-center flex-row"},q={class:"-mr-2 flex items-center sm:hidden"},W={class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},B={class:"flex ml-auto"},Z={href:"",class:"flex flex-row items-center"},A=(0,l._)("img",{src:"https://pbs.twimg.com/profile_images/378800000298815220/b567757616f720812125bfbac395ff54_normal.png",alt:"",class:"h-10 w-10 bg-gray-200 border rounded-full"},null,-1),F={class:"flex flex-col ml-2"},I={class:"truncate w-20 font-semibold tracking-wide leading-none"},O=(0,l._)("span",{class:"truncate w-20 text-gray-500 text-xs leading-none mt-1"},"Manager",-1),K={class:"main-content flex flex-col flex-grow p-4"},Y=(0,l._)("footer",{class:"footer px-4 py-6"},[(0,l._)("div",{class:"footer-content"},[(0,l._)("p",{class:"text-sm text-gray-600 text-center"},"© Dforce admin 2023. All rights reserved.")])],-1);const E={__name:"Authenticated",setup:function(e){var r=(0,l.iH)(!1);return function(e,t){return(0,l.wg)(),(0,l.iD)("div",V,[(0,l.Wm)((0,l.SU)(k)),(0,l._)("main",M,[(0,l._)("header",j,[(0,l._)("div",H,[(0,l._)("div",q,[(0,l._)("button",{onClick:t[0]||(t[0]=function(e){return r.value=!r.value}),class:"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"},[((0,l.wg)(),(0,l.iD)("svg",W,[(0,l._)("path",{class:(0,l.C_)({hidden:r.value,"inline-flex":!r.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),(0,l._)("path",{class:(0,l.C_)({hidden:!r.value,"inline-flex":r.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])]),(0,l._)("div",B,[(0,l._)("a",Z,[A,(0,l._)("span",F,[(0,l._)("span",I,(0,l.zw)(e.$page.props.auth.user.name),1),O])])])])]),(0,l._)("div",K,[(0,l.Wm)((0,l.SU)(z)),(0,l.WI)(e.$slots,"default")]),Y])])}}}},2289:(e,r,t)=>{t.r(r),t.d(r,{default:()=>x});var l=t(5548),n=t(7864),a=t(8748),s=t(393),o=t(2638),i=t(7793),u=(0,l._)("h1",{class:"font-bold text-2xl text-gray-700 flex items-center"}," Create new Setting ",-1),d={class:"flex flex-col flex-grow bg-white rounded mt-4 p-4"},c=["onSubmit"],m={class:"grid grid-cols-1 gap-2 w-full py-4"},g=[(0,l._)("option",{value:"string",selected:""},"String",-1),(0,l._)("option",{value:"json"},"JSON",-1),(0,l._)("option",{value:"bool"},"Boolean",-1)],f=(0,l._)("button",{type:"submit",class:"text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"}," Create ",-1);const x={__name:"Create",props:{item:Object,errors:Object},setup:function(e){var r=e,t=(0,l.iH)(r.item),x=function(){a.Nd.post(route("admin.settings.store"),{data:t.value})};return function(r,p){return(0,l.wg)(),(0,l.iD)(l.HY,null,[(0,l.Wm)((0,l.SU)(a.Fb),{title:"Create new Setting"}),(0,l.Wm)(n.Z,null,{default:(0,l.w5)((function(){return[u,(0,l._)("div",d,[(0,l._)("form",{onSubmit:(0,l.iM)(x,["prevent"])},[(0,l.Wm)(o.Z),(0,l._)("div",m,[(0,l.Wm)((0,l.SU)(s.Z),{class:"mb-3",type:"text",errors:e.errors,label:"Key",modelValue:t.value.key,"onUpdate:modelValue":p[0]||(p[0]=function(e){return t.value.key=e})},null,8,["errors","modelValue"]),(0,l.Wm)(i.Z,{class:"mb-3",errors:e.errors,label:"Value",modelValue:t.value.val,"onUpdate:modelValue":p[1]||(p[1]=function(e){return t.value.val=e})},null,8,["errors","modelValue"]),(0,l.wy)((0,l._)("select",{"onUpdate:modelValue":p[2]||(p[2]=function(e){return t.value.type=e}),required:"",class:(0,l.C_)(["mb-3",{"bg-red-50 border border-red-500":e.errors&&e.errors[r.name]}])},g,2),[[l.bM,t.value.type]])]),f],40,c)])]})),_:1})],64)}}}}}]);