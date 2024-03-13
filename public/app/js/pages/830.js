"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[830],{3195:(e,t,l)=>{l.d(t,{Z:()=>i});var r=l(5548),n=l(8748),s={key:0,class:"mx-4 my-6"},a={class:"inline-flex -space-x-px"};const i={__name:"Pagination",props:{links:Array},setup:function(e){return function(t,l){return e.links.length>3?((0,r.wg)(),(0,r.iD)("nav",s,[(0,r._)("ul",a,[((0,r.wg)(!0),(0,r.iD)(r.HY,null,(0,r.Ko)(e.links,(function(t,l){return(0,r.wg)(),(0,r.iD)("li",{key:"pagination-link-"+l},[(0,r.Wm)((0,r.SU)(n.rU),{href:t.url,class:(0,r.C_)(["py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700",{"text-blue-600 bg-blue-50":t.active,"rounded-l-lg":0===l,"rounded-r-lg":l===e.links.length-1}]),innerHTML:t.label},null,8,["href","class","innerHTML"])])})),128))])])):(0,r.kq)("",!0)}}}},7864:(e,t,l)=>{l.d(t,{Z:()=>I});var r=l(5548),n=l(8748),s=(0,r.uE)('<div class="sidebar-header w-80 flex items-center justify-center py-4"><div class="inline-flex"><a href="#" class="inline-flex flex-row items-center"><svg class="w-10 h-10 text-red-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.757 2.034a1 1 0 01.638.519c.483.967.844 1.554 1.207 2.03.368.482.756.876 1.348 1.467A6.985 6.985 0 0117 11a7.002 7.002 0 01-14 0c0-1.79.684-3.583 2.05-4.95a1 1 0 011.707.707c0 1.12.07 1.973.398 2.654.18.374.461.74.945 1.067.116-1.061.328-2.354.614-3.58.225-.966.505-1.93.839-2.734.167-.403.356-.785.57-1.116.208-.322.476-.649.822-.88a1 1 0 01.812-.134zm.364 13.087A2.998 2.998 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879.586.585.879 1.353.879 2.121s-.293 1.536-.879 2.121z" clip-rule="evenodd"></path></svg><span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">DForce admin</span></a></div></div>',1),a={class:"sidebar-content px-4 py-6"},i={class:"flex flex-col w-full"},o={class:"my-px"},u={key:0},d=["onClick"],c=(0,r._)("span",{class:"flex items-center justify-center text-lg text-gray-400"},[(0,r._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,r._)("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})])],-1),g={class:"ml-3"},x=(0,r._)("svg",{class:"w-6 h-6 ml-auto",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[(0,r._)("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),m={key:0,class:"bg-white rounded-lg"},f={class:"my-px"},p={key:1},h=(0,r._)("span",{class:"flex items-center justify-center text-lg text-gray-400"},[(0,r._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,r._)("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})])],-1),w={class:"ml-3"},v={key:1,class:"flex font-medium text-sm text-gray-300 px-4 my-4 uppercase"},_={class:"my-px"},y=["href"],b=[(0,r._)("span",{class:"flex items-center justify-center text-lg text-red-400"},[(0,r._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,r._)("path",{d:"M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"})])],-1),(0,r._)("span",{class:"ml-3"},"Logout",-1)];const k={__name:"Sidebar",setup:function(e){var t=(0,r.iH)(!1),l=route().current(),k=(0,r.iH)(!1),U=(0,r.iH)([{route:"admin.dashboard",group:"admin.dashboard",title:"Головна"},{route:"admin.translations.index",group:"admin.translations",title:"Переклади"},{route:"admin.settings.index",group:"admin.settings",title:"Додаткові змінні"},{route:null,title:"Контент"},{route:"admin.banners.index",group:"admin.banners.index",title:"Банери"},{route:"admin.sliders.index",group:"admin.sliders.index",title:"Слайдери"},{route:"admin.file-manager",group:"admin.file-manager",title:"Файловий менеджер"},{route:"admin.seo-rule.index",group:"admin.seo-rule",title:"SEO правила"},{route:"admin.links.index",group:"admin.links",title:"Посилання"},{route:"admin.menu.index",group:"admin.menu",title:"Меню"},{route:"admin.leads.index",group:"admin.leads",title:"Ліди"},{route:null,title:"Управління"},{route:"admin.users.index",group:"admin.users",title:"Користувачі"},{route:"admin.roles.index",group:"admin.roles",title:"Ролі"}]);return(0,r.bv)((function(){})),function(e,C){return(0,r.wg)(),(0,r.iD)("aside",{class:(0,r.C_)(["sidebar w-80 md:shadow transform md:translate-x-0 transition-transform duration-150 ease-in bg-slate-500",{"-translate-x-full":!t.value}])},[s,(0,r._)("div",a,[(0,r._)("ul",i,[((0,r.wg)(!0),(0,r.iD)(r.HY,null,(0,r.Ko)(U.value,(function(t){return(0,r.wg)(),(0,r.iD)("li",o,[t.sublist&&t.sublist.length>0?((0,r.wg)(),(0,r.iD)("div",u,[(0,r._)("div",{class:(0,r.C_)(["flex flex-row items-center h-10 px-3 rounded-lg cursor-pointer",{"text-gray-700 bg-gray-100":(0,r.SU)(l).includes(t.group),"text-gray-300 hover:bg-gray-100 hover:text-gray-700":!(0,r.SU)(l).includes(t.group)}]),onClick:function(e){return l=t.group,void(k.value===l?k.value=!1:k.value=l);var l}},[c,(0,r._)("span",g,(0,r.zw)(t.title),1),x],10,d),t.sublist&&t.sublist.length>0?(0,r.wy)(((0,r.wg)(),(0,r.iD)("ul",m,[((0,r.wg)(!0),(0,r.iD)(r.HY,null,(0,r.Ko)(t.sublist,(function(t){return(0,r.wg)(),(0,r.iD)("li",f,[(0,r.Wm)((0,r.SU)(n.rU),{href:e.route(t.route,t.routeParams||[]),class:"flex flex-row items-center h-10 px-3 rounded-lg"},{default:(0,r.w5)((function(){return[(0,r._)("span",{class:(0,r.C_)(["ml-3",{"text-white bg-slate-500 rounded-lg px-3 w-full":(0,r.SU)(l)===t.route}])},(0,r.zw)(t.title),3)]})),_:2},1032,["href"])])})),256))],512)),[[r.F8,k.value===t.group]]):(0,r.kq)("",!0)])):((0,r.wg)(),(0,r.iD)("div",p,[t.route?((0,r.wg)(),(0,r.j4)((0,r.SU)(n.rU),{key:0,href:e.route(t.route),class:(0,r.C_)(["flex flex-row items-center h-10 px-3 rounded-lg",{"text-gray-700 bg-gray-100":(0,r.SU)(l).includes(t.group),"text-gray-300 hover:bg-gray-100 hover:text-gray-700":!(0,r.SU)(l).includes(t.group)}])},{default:(0,r.w5)((function(){return[h,(0,r._)("span",w,(0,r.zw)(t.title),1)]})),_:2},1032,["href","class"])):((0,r.wg)(),(0,r.iD)("span",v,(0,r.zw)(t.title),1))]))])})),256)),(0,r._)("li",_,[(0,r._)("a",{href:e.route("logout"),class:"flex flex-row items-center w-full h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"},b,8,y)])])])],2)}}};var U=(0,r._)("svg",{"aria-hidden":"true",class:"flex-shrink-0 w-5 h-5",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[(0,r._)("path",{"fill-rule":"evenodd",d:"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z","clip-rule":"evenodd"})],-1),C=(0,r._)("span",{class:"sr-only"},"Info",-1),D={class:"ml-3 text-sm font-medium"},S=(0,r._)("span",{class:"text-green-800 text-red-800 text-yellow-800 bg-green-50 bg-yellow-50 bg-red-50"},null,-1);const z={__name:"Alert",setup:function(e){var t=(0,r.Fl)((function(){return(0,n.qt)().props.flash.message}));return function(e,l){return(0,r.SU)(t).text?((0,r.wg)(),(0,r.iD)("div",{key:0,class:(0,r.C_)(["flex p-4 mb-4 rounded-lg","text-".concat((0,r.SU)(t).status,"-800 bg-").concat((0,r.SU)(t).status,"-50")]),role:"alert"},[U,C,(0,r._)("div",D,(0,r.zw)((0,r.SU)(t).text),1),S],2)):(0,r.kq)("",!0)}}};var M={class:"flex flex-row min-h-screen bg-gray-100 text-gray-800"},j={class:"main flex flex-col flex-grow -ml-80 md:ml-0 transition-all duration-150 ease-in"},H={class:"header bg-white shadow py-4 px-4"},W={class:"header-content flex items-center flex-row"},B={class:"-mr-2 flex items-center sm:hidden"},A={class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},L={class:"flex ml-auto"},Y={href:"",class:"flex flex-row items-center"},q=(0,r._)("img",{src:"https://pbs.twimg.com/profile_images/378800000298815220/b567757616f720812125bfbac395ff54_normal.png",alt:"",class:"h-10 w-10 bg-gray-200 border rounded-full"},null,-1),F={class:"flex flex-col ml-2"},K={class:"truncate w-20 font-semibold tracking-wide leading-none"},Z=(0,r._)("span",{class:"truncate w-20 text-gray-500 text-xs leading-none mt-1"},"Manager",-1),E={class:"main-content flex flex-col flex-grow p-4"},O=(0,r._)("footer",{class:"footer px-4 py-6"},[(0,r._)("div",{class:"footer-content"},[(0,r._)("p",{class:"text-sm text-gray-600 text-center"},"© Dforce admin 2023. All rights reserved.")])],-1);const I={__name:"Authenticated",setup:function(e){var t=(0,r.iH)(!1);return function(e,l){return(0,r.wg)(),(0,r.iD)("div",M,[(0,r.Wm)((0,r.SU)(k)),(0,r._)("main",j,[(0,r._)("header",H,[(0,r._)("div",W,[(0,r._)("div",B,[(0,r._)("button",{onClick:l[0]||(l[0]=function(e){return t.value=!t.value}),class:"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"},[((0,r.wg)(),(0,r.iD)("svg",A,[(0,r._)("path",{class:(0,r.C_)({hidden:t.value,"inline-flex":!t.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),(0,r._)("path",{class:(0,r.C_)({hidden:!t.value,"inline-flex":t.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])]),(0,r._)("div",L,[(0,r._)("a",Y,[q,(0,r._)("span",F,[(0,r._)("span",K,(0,r.zw)(e.$page.props.auth.user.name),1),Z])])])])]),(0,r._)("div",E,[(0,r.Wm)((0,r.SU)(z)),(0,r.WI)(e.$slots,"default")]),O])])}}}},7830:(e,t,l)=>{l.r(t),l.d(t,{default:()=>h});var r=l(5548),n=l(7864),s=l(8748),a=l(3195),i={class:"font-bold text-2xl text-gray-700 flex items-center"},o=["href"],u={class:"flex flex-col flex-grow bg-white rounded mt-4"},d={class:"relative overflow-x-auto shadow-md sm:rounded-lg"},c={class:"w-full text-sm text-left text-gray-500"},g=(0,r._)("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50"},[(0,r._)("tr",null,[(0,r._)("th",{scope:"col",class:"px-6 py-3"}," ПІБ "),(0,r._)("th",{scope:"col",class:"px-6 py-3"}," Email "),(0,r._)("th",{scope:"col",class:"px-6 py-3"}," Телефон ")])],-1),x={scope:"row",class:"px-6 py-4 font-medium text-gray-900"},m={scope:"row",class:"px-6 py-4 font-medium text-gray-900"},f={class:"px-6 py-4 text-gray-500"},p={class:"px-6 py-4 text-right whitespace-nowrap"};const h={__name:"List",props:{items:Object,filters:Object},setup:function(e){return function(t,l){return(0,r.wg)(),(0,r.iD)(r.HY,null,[(0,r.Wm)((0,r.SU)(s.Fb),{title:"Список банері"}),(0,r.Wm)(n.Z,null,{default:(0,r.w5)((function(){return[(0,r._)("h1",i,[(0,r.Uk)(" Список лідів "),(0,r._)("a",{href:t.route("admin.leads.download"),class:"text-white bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-4 focus:ring-slate-300 font-medium rounded-full text-sm px-3 py-1 ml-3 text-center"},"Скачати",8,o)]),(0,r._)("div",u,[(0,r._)("div",d,[(0,r._)("table",c,[g,(0,r._)("tbody",null,[((0,r.wg)(!0),(0,r.iD)(r.HY,null,(0,r.Ko)(e.items.data,(function(e,l){return(0,r.wg)(),(0,r.iD)("tr",{key:"table-item-"+l,class:"bg-white border-b"},[(0,r._)("th",x,(0,r.zw)(e.name),1),(0,r._)("th",m,(0,r.zw)(e.email),1),(0,r._)("td",f,(0,r.zw)(e.phone),1),(0,r._)("td",p,[(0,r.Wm)((0,r.SU)(s.rU),{href:t.route("admin.leads.destroy",{lead:e.id}),method:"delete",as:"button",class:"py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-red-50 rounded-lg border border-gray-200 hover:bg-red-100 focus:z-10 focus:ring-4 focus:ring-gray-200"},{default:(0,r.w5)((function(){return[(0,r.Uk)(" Видалити ")]})),_:2},1032,["href"])])])})),128))])]),(0,r.Wm)((0,r.SU)(a.Z),{links:e.items.links},null,8,["links"])])])]})),_:1})],64)}}}}}]);