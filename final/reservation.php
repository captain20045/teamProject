@charset "utf-8";
@import url(./fonts/NanumSquare.css);
@import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css);

/* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  text-decoration: none;
}
/* HTML5 display-role reset for older browsers */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}
body {
  line-height: 1;
}
ol,
ul {
  list-style: none;
}
blockquote,
q {
  quotes: none;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
  content: "";
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
a {
  color: initial;
}
img {
  max-width: 100%;
}
input {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  border-radius: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
}
select {
  border-radius: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
}
body {
  font-family: "NanumSquare", Arial, sans-serif;
  color: #666;
  font-size: 15px;
  line-height: 1;
  font-weight: normal;
}
textarea {
  font-family: "NanumSquare", Arial, sans-serif;
}

/*
	T1-FEFW v0.5 | 20170109
*/

/* Headers */
h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 500;
  line-height: 1.1;
}
h1 {
  font-size: 45px;
}
h2 {
  font-size: 25px;
}
h3 {
  font-size: 18px;
}
h4 {
  font-size: 14px;
}
h5 {
  font-size: 12px;
}
h6 {
  font-size: 10px;
}

/* Blockquotes */
blockquote {
  margin: 20px 0;
  padding-left: 25px;
  border-left: 5px solid #ee6e73;
}

/* Show Event */
.paraShowing {
  opacity: 0;
}

/* Grid System */
.row {
}
.row:before,
.row:after {
  content: "";
  display: table;
}
.row:after {
  clear: both;
}
.row .col {
  float: left;
  box-sizing: border-box;
  left: auto;
  right: auto;
}
.row .col.col-right {
  float: right;
  text-align: right;
}
.row .col.s1 {
  width: 8.3333333333%;
}
.row .col.s2 {
  width: 16.6666666666%;
}
.row .col.s3 {
  width: 25%;
}
.row .col.s4 {
  width: 33.3333333333%;
}
.row .col.s5 {
  width: 41.6666666666%;
}
.row .col.s6 {
  width: 50%;
}
.row .col.s7 {
  width: 58.3333333333%;
}
.row .col.s8 {
  width: 66.6666666666%;
}
.row .col.s9 {
  width: 75%;
}
.row .col.s10 {
  width: 83.3333333333%;
}
.row .col.s11 {
  width: 91.6666666666%;
}
.row .col.s12 {
  width: 100%;
}
.row .col[class*="push-"],
.row .col[class*="pull-"] {
  position: relative;
}
.row .col.push-s1 {
  left: 8.3333333333%;
}
.row .col.push-s2 {
  left: 16.6666666666%;
}
.row .col.push-s3 {
  left: 25%;
}
.row .col.push-s4 {
  left: 33.3333333333%;
}
.row .col.push-s5 {
  left: 41.6666666666%;
}
.row .col.push-s6 {
  left: 50%;
}
.row .col.push-s7 {
  left: 58.3333333333%;
}
.row .col.push-s8 {
  left: 66.6666666666%;
}
.row .col.push-s9 {
  left: 75%;
}
.row .col.push-s10 {
  left: 83.3333333333%;
}
.row .col.push-s11 {
  left: 91.6666666666%;
}
.row .col.pull-s1 {
  right: 8.3333333333%;
}
.row .col.pull-s2 {
  right: 16.6666666666%;
}
.row .col.pull-s3 {
  right: 25%;
}
.row .col.pull-s4 {
  right: 33.3333333333%;
}
.row .col.pull-s5 {
  right: 41.6666666666%;
}
.row .col.pull-s6 {
  right: 50%;
}
.row .col.pull-s7 {
  right: 58.3333333333%;
}
.row .col.pull-s8 {
  right: 66.6666666666%;
}
.row .col.pull-s9 {
  right: 75%;
}
.row .col.pull-s10 {
  right: 83.3333333333%;
}
.row .col.pull-s11 {
  right: 91.6666666666%;
}

/* Panels */
.panel {
  background-color: #fff;
  border: 1px solid #e5e8eb;
  border-radius: 4px;
  box-sizing: border-box;
  padding: 25px;
}

/* Buttons */
a.btn {
  display: inline-block;
}
.btn {
  width: auto;
  min-width: 45px;
  height: 45px;
  padding: 0 15px;
  font-size: 13px;
  line-height: 45px;
  text-align: center;
  box-sizing: border-box;
  vertical-align: middle;
  white-space: nowrap;
  cursor: pointer;
  border: 1px solid #273246;
  color: #273246;
  background-color: #fff;
  overflow: hidden;
  -webkit-transition: background-color 0.2s ease-in-out,
    -webkit-transform 0.3s ease-out;
  -moz-transition: background 0.2s ease-in-out, -moz-transform 0.3s ease-out;
  -ms-transition: background 0.2s ease-in-out, -ms-transform 0.3s ease-out;
  -o-transition: background 0.2s ease-in-out, -o-transform 0.3s ease-out;
  transition: background 0.2s ease-in-out, transform 0.3s ease-out;
  font-weight: bold;
  margin: 0;
}
/* .btn:before { display: inline-block; content: ''; height: 100%; vertical-align: middle; position: static; } */
.btn > img {
  vertical-align: middle;
  display: inline-block;
}
.btn.small {
  height: 25px;
  font-size: 13px;
  line-height: 25px;
}
.btn.large {
  height: 65px;
  line-height: 65px;
}
.btn.disabled {
  pointer-events: none;
  background-color: #dfdfdf !important;
  box-shadow: none;
  color: #9f9f9f !important;
  cursor: default;
}
.btn.radius {
  border-radius: 0.25em;
}
.btn.radius20 {
  border-radius: 20px;
}
.btn.radius20.large {
  border-radius: 40px;
}
.btn.radius20.small {
  border-radius: 60px;
}
.btn.floating {
  padding: 0;
  width: 40px;
  height: 40px;
  min-width: inherit;
  max-width: inherit;
  line-height: 40px;
  border-radius: 50%;
  font-size: 30px;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12),
    0 3px 1px -2px rgba(0, 0, 0, 0.2);
}
.btn.floating.large {
  width: 65px;
  height: 65px;
  line-height: 65px;
}
.btn.floating.small {
  width: 25px;
  height: 25px;
  line-height: 25px;
}
.btn.floating.trans {
  width: 35px;
  height: 35px;
  line-height: 35px;
  box-shadow: inherit;
}
.btn.trans {
  border: 1px solid transparent;
  background-color: transparent;
}
.btn.blue {
  border: 1px solid #6b90d4;
  color: #fff;
  background-color: #6b90d4;
}
.btn.blue_trans {
  border: 1px solid #6b90d4;
  color: #6b90d4;
  background-color: transparent;
}
.btn.black {
  border: 1px solid #131313;
  color: #e6950c;
  background-color: #1a1a19;
}
.btn.red {
  border: 1px solid #f96b5f;
  color: #fff;
  background-color: #f96b5f;
}
.btn.red_trans {
  border: 1px solid #f96b5f;
  color: #f96b5f;
  background-color: transparent;
}
.btn.white_trans {
  border: 1px solid #fff;
  color: #fff;
  background-color: transparent;
}
.btn.green {
  border: 1px solid #5dd6b7;
  color: #fff;
  background-color: #5dd6b7;
}
.btn.orange {
  border: 1px solid #f29700;
  color: #333;
  background-color: #f29700;
}
.btn.gray {
  border: 1px solid #5b5b5b;
  color: #fff;
  background-color: #5b5b5b;
}
.btn.gray2 {
  border: 1px solid #7d7d7d;
  color: #fff;
  background-color: #7d7d7d;
}
.btn_group {
  position: relative;
  vertical-align: middle;
  margin-top: 25px;
}
.btn_group.center {
  text-align: center;
}
.btn_group.right {
  text-align: right;
}

.btn.mo_effect {
  padding-left: 5px;
  width: 35px;
  height: 35px;
  min-width: inherit;
  max-width: inherit;
  line-height: 35px;
  border-radius: 20px;
  text-align: left;
  -webkit-transition: 0.3s ease-in-out;
  -moz-transition: 0.3s ease-in-out;
  -ms-transition: 0.3s ease-in-out;
  -o-transition: 0.3s ease-in-out;
  transition: 0.3s ease-in-out;
}
.btn.mo_effect:hover {
  padding: 0 12px;
  width: 100px;
}

/* Buttons Ico */
.ico {
  width: 22px;
  text-align: center;
  line-height: inherit;
  display: inline-block;
  height: 100%;
  min-height: 22px;
}
.ico.left {
  float: left;
  margin-right: 1px;
}
.ico.right {
  float: right;
  margin-left: 7px;
}
.ico.close {
  background: url(../images/ico/ico_close.png) center no-repeat;
}
.ico.cal {
  background: url(../images/ico/ico_cal.png) center no-repeat;
}
.ico.cal_w {
  background: url(../images/ico/ico_cal_white.png) center no-repeat;
}
.ico.cal_black {
  background: url(https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/ico_cal_black.png)
    center no-repeat;
}
.ico.star {
  background: url(../images/ico/ico_star.png) no-repeat 0 7px / contain;
  margin-bottom: -3px;
}
.ico.star_black {
  background: url(img/ico_star_black.png) center no-repeat;
}
.ico.zoom_black {
  background: url(https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/ico_zoom_black.png)
    center no-repeat;
}
.ico.list {
  background: url(../images/ico/ico_list.png) center no-repeat;
}
.ico.members {
  background: url(../images/ico/ico_members.png) center no-repeat;
}
.ico.location {
  background: url(../images/ico/ico_location.png) center no-repeat;
}
.ico.call {
  background: url(../images/ico/ico_call.png) center no-repeat;
}
.ico.email {
  background: url(../images/ico/ico_email.png) center no-repeat;
}
.ico.lock {
  background: url(../images/ico/ico_lock.png) center no-repeat;
}
.ico.prev_w {
  background: url(../images/ico/ico_paging_prev_w.png) center no-repeat;
}
.ico.next_w {
  background: url(../images/ico/ico_paging_next_w.png) center no-repeat;
}

/* Labels */
.label {
  width: 100%;
  max-width: 80px;
  display: inline-block;
  padding: 0.2em 0.6em 0.3em;
  font-size: 13px;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  border-radius: 0.25em;
  background-color: #ccc;
  border: 1px solid #777;
}
.label.sky {
  background-color: #69c0e2;
  border: 1px solid #49acd2;
  color: #fff;
}
.label.red {
  background-color: #f96b5f;
  border: 1px solid #e45549;
  color: #fff;
}
.label.green {
  background-color: #5dd6b7;
  border: 1px solid #4dbca0;
  color: #fff;
}

/* Forms */
.ipt {
  border: 1px solid #b8b8b8;
  color: #666;
  padding: 5px;
  height: 45px;
  line-height: 45px;
  box-sizing: border-box;
  background-color: rgba(255, 255, 255, 0.15);
}
textarea.ipt {
  height: auto;
  line-height: 20px !important;
}
.ipt.w100p {
  width: 100%;
}
.ipt_group {
  margin-bottom: 5px;
  position: relative;
  display: table;
  width: 100%;
}
.ipt_group .ipt {
  display: table-cell;
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
}
.ipt_left,
.ipt_right {
  display: table-cell;
  position: relative;
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.ipt_right {
  padding-left: 8px;
}
.ipt_right.addon {
  padding-left: 0;
}
.ipt_right > .btn {
  height: 45px;
  line-height: 45px;
}
.ipt_left {
  padding-right: 8px;
}
.ipt_left.addon {
  padding-right: 0;
}
.ipt.black {
  border-color: #1a1a1a;
  color: #fff;
  background-color: #1a1a1a;
}
.ipt.gray {
  border-color: transparent;
  background-color: #d0d0d0;
}
.datepicker {
  position: relative;
  display: inline-block;
}
.datepicker .ico {
  position: absolute;
  top: 0;
  right: 0;
}

/* Radio Checkbox */
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
[type="radio"]:not(:checked),
[type="radio"]:checked,
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
  opacity: 0;
}
[type="radio"]:not(:checked) + label,
[type="radio"]:checked + label {
  position: relative;
  padding-left: 25px;
  cursor: pointer;
  display: inline-block;
  height: 30px;
  line-height: 30px;
  font-size: 15px;
  margin-right: 20px;
  transition: 0.28s ease;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
[type="radio"] + label:before,
[type="radio"] + label:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  margin: 5px 5px 5px 0;
  width: 20px;
  height: 20px;
  z-index: 0;
  transition: 0.28s ease;
  box-sizing: border-box;
}
[type="radio"]:not(:checked) + label:before,
[type="radio"]:not(:checked) + label:after,
[type="radio"]:checked + label:before,
[type="radio"]:checked + label:after {
  border-radius: 50%;
}
[type="radio"]:not(:checked) + label:before,
[type="radio"]:not(:checked) + label:after {
  border: 1px solid #7e7e7e;
}
[type="radio"]:checked + label:after,
[type="radio"]:checked + label:before {
  border: 1px solid #e6950c;
}
[type="radio"]:checked + label:after {
  background-color: #e6950c;
  -webkit-transform: scale(0.5);
  transform: scale(0.5);
}

[type="checkbox"] + label {
  position: relative;
  padding-left: 30px;
  cursor: pointer;
  display: inline-block;
  height: 30px;
  line-height: 30px;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -ms-user-select: none;
}
[type="checkbox"] + label:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 18px;
  height: 18px;
  z-index: 0;
  border: 1px solid #fff;
  border-radius: 1px;
  background-color: transparent;
  margin-top: 2px;
  transition: 0.2s;
  margin: 5px 5px 5px 0;
}
[type="checkbox"]:checked + label:before {
  border: 1px solid #505050;
  border-radius: 1px;
  background-color: #505050;
}
[type="checkbox"]:checked + label:after {
  content: "";
  position: absolute;
  top: 4px;
  left: 5px;
  z-index: 1;
  width: 6px;
  height: 12px;
  border-top: 2px solid transparent;
  border-left: 2px solid transparent;
  border-right: 2px solid #fff;
  border-bottom: 2px solid #fff;
  -webkit-transform: rotateZ(37deg);
  transform: rotateZ(37deg);
}
[type="checkbox"].right + label {
  padding-left: 0;
  padding-right: 30px;
}
[type="checkbox"].right + label:before {
  left: auto;
  right: 0;
  margin: 5px 0 5px 5px;
}
[type="checkbox"].right:checked + label:after {
  left: auto;
  right: 5px;
}

[type="checkbox"].righ2t + label {
  padding-left: 0;
  padding-right: 30px;
}
[type="checkbox"].right2 + label:before {
  left: auto;
  right: -40px;
  margin: 5px 0 5px 5px;
  top: -8px;
}
[type="checkbox"].right2:checked + label:after {
  left: auto;
  right: -35px;
  top: -4px;
}

/* Select */
select {
  background-color: rgba(255, 255, 255, 0.15);
  width: 100%;
  min-width: 55px;
  padding: 5px;
  color: #505050;
  border: 1px solid #b8b8b8;
  height: 45px;
  box-sizing: border-box;
  vertical-align: middle;
  font-weight: bold;
}
select.black_trans {
  border: 1px solid #151515;
  color: #000;
}
select.gray {
  border-color: transparent;
  background-color: #d0d0d0;
}

/* 레이어 팝업 백그라운드 */
#pop_bg_common {
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  z-index: 90;
  background: url("../images/common/transparent.png") repeat;
  background-color: rgba(0, 0, 0, 0.5);
  display: none;
  visibility: hidden;
  opacity: 0;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#cc000000, endColorstr=#cc000000);
  -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#cc000000, endColorstr=#cc000000)";
  -webkit-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  -moz-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  -o-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
}
#pop_bg_common:nth-child(n) {
  filter: none;
}
#pop_bg_common.on {
  visibility: visible;
  opacity: 1;
}

#pop_bg_common.purple {
  background-color: #39316c;
  opacity: 0.9;
  width: 0;
  height: 0;
}
#pop_bg_common.purple {
  left: auto;
  top: auto;
  right: -50%;
  bottom: -50%;
  border-radius: 100%;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
#pop_bg_common.on {
  width: 100%;
  height: 100%;
}

/*popup 스타일*/
.pop_type1 {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 99;
  display: none;
  visibility: hidden;
  opacity: 0;
  -webkit-overflow-scrolling: touch;
  max-width: 100%;
  min-width: 320px;
  max-height: 95%;
  min-height: 150px;
  overflow: hidden;
  -webkit-transform: scale(0.6, 0.6);
  -moz-transform: scale(0.6, 0.6);
  -ms-transform: scale(0.6, 0.6);
  -o-transform: scale(0.6, 0.6);
  transform: scale(0.6, 0.6);
  -webkit-transition: visibility 0.4s ease-in-out, opacity 0.4s ease-in-out,
    -webkit-transform 0.3s ease-in-out 0.4s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
  -moz-transition: visibility 0.4s ease-in-out, opacity 0.4s ease-in-out,
    -moz-transform 0.3s ease-in-out 0.4s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
  -ms-transition: visibility 0.4s ease-in-out, opacity 0.4s ease-in-out,
    -ms-transform 0.3s ease-in-out 0.4s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
  -o-transition: visibility 0.4s ease-in-out, opacity 0.4s ease-in-out,
    -o-transform 0.3s ease-in-out 0.4s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
  transition: visibility 0.4s ease-in-out, opacity 0.4s ease-in-out,
    transform 0.3s ease-in-out 0.4s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
}
.pop_type1.on {
  visibility: visible;
  opacity: 1;
  -webkit-transform: scale(1, 1);
  -moz-transform: scale(1, 1);
  -ms-transform: scale(1, 1);
  -o-transform: scale(1, 1);
  transform: scale(1, 1);
  -webkit-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out,
    -webkit-transform 0.4s cubic-bezier(0.67, 0.04, 0.32, 1) 0.1s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
  -moz-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out,
    -moz-transform 0.4s cubic-bezier(0.67, 0.04, 0.32, 1) 0.1s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
  -ms-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out,
    -ms-transform 0.4s cubic-bezier(0.67, 0.04, 0.32, 1) 0.1s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
  -o-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out,
    -o-transform 0.4s cubic-bezier(0.67, 0.04, 0.32, 1) 0.1s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
  transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out,
    transform 0.4s cubic-bezier(0.67, 0.04, 0.32, 1) 0.1s,
    width 0.5s cubic-bezier(0.67, 0.04, 0.32, 1);
}
.pop_type1 > .inner {
  position: relative;
  background-color: #fff;
  width: 100%;
  height: 100%;
  padding: 0;
}
.pop_type1 > .inner:after {
  content: "";
  display: block;
  clear: both;
}
.pop_type1 > .inner .pop_header {
  background-color: #333;
  color: #fff;
  overflow: hidden;
  padding: 1.25em 0;
  box-sizing: border-box;
}
.pop_type1 > .inner .pop_header h1 {
  color: #fff;
}
.pop_type1 > .inner .pop_header .btn_group {
  position: absolute;
  top: 1.25em;
  right: 1.25em;
  margin-top: 0;
}
.pop_type1 > .inner .pop_header .btn_group .btn {
  min-width: inherit;
  padding: 1% 0.5em;
  height: 2.25em;
}
/* .pop_type1 > .inner .pop_header button.pop_close{position: absolute;top: 0px;right: 20px;z-index: 2;background-color: #cbcaca; border-radius: 100%;width: 38px;height: 38px;}
.pop_type1 > .inner .pop_header button.pop_close:before, .pop_type1 > .inner .pop_header button.pop_close:after { background-color: #fff; right: 10px;left: 10px; } */
.pop_type1 > .inner .pop_content {
  overflow-y: auto;
  overflow-x: hidden;
}

.popupclass img {
  width: 100% !important;
}
@media screen and (max-width: 1023px) {
  .row .col.t1 {
    width: 8.3333333333%;
  }
  .row .col.t2 {
    width: 16.6666666666%;
  }
  .row .col.t3 {
    width: 25%;
  }
  .row .col.t4 {
    width: 33.3333333333%;
  }
  .row .col.t5 {
    width: 41.6666666666%;
  }
  .row .col.t6 {
    width: 50%;
  }
  .row .col.t7 {
    width: 58.3333333333%;
  }
  .row .col.t8 {
    width: 66.6666666666%;
  }
  .row .col.t9 {
    width: 75%;
  }
  .row .col.t10 {
    width: 83.3333333333%;
  }
  .row .col.t11 {
    width: 91.6666666666%;
  }
  .row .col.t12 {
    width: 100%;
  }
}

@media screen and (max-width: 767px) {
  .row .col.m1 {
    width: 8.3333333333%;
  }
  .row .col.m2 {
    width: 16.6666666666%;
  }
  .row .col.m3 {
    width: 25%;
  }
  .row .col.m4 {
    width: 33.3333333333%;
  }
  .row .col.m5 {
    width: 41.6666666666%;
  }
  .row .col.m6 {
    width: 50%;
  }
  .row .col.m7 {
    width: 58.3333333333%;
  }
  .row .col.m8 {
    width: 66.6666666666%;
  }
  .row .col.m9 {
    width: 75%;
  }
  .row .col.m10 {
    width: 83.3333333333%;
  }
  .row .col.m11 {
    width: 91.6666666666%;
  }
  .row .col.m12 {
    width: 100%;
  }

  .pagination .pc {
    display: none;
  }
  .pagination .mobile {
    display: block;
  }
}
/*! jQuery UI - v1.12.1 - 2017-01-08
* http://jqueryui.com
* Includes: draggable.css, core.css, resizable.css, selectable.css, sortable.css, accordion.css, autocomplete.css, menu.css, button.css, controlgroup.css, checkboxradio.css, datepicker.css, dialog.css, progressbar.css, selectmenu.css, slider.css, spinner.css, tabs.css, tooltip.css, theme.css
* To view and modify this theme, visit http://jqueryui.com/themeroller/?scope=&folderName=base&cornerRadiusShadow=8px&offsetLeftShadow=0px&offsetTopShadow=0px&thicknessShadow=5px&opacityShadow=30&bgImgOpacityShadow=0&bgTextureShadow=flat&bgColorShadow=666666&opacityOverlay=30&bgImgOpacityOverlay=0&bgTextureOverlay=flat&bgColorOverlay=aaaaaa&iconColorError=cc0000&fcError=5f3f3f&borderColorError=f1a899&bgTextureError=flat&bgColorError=fddfdf&iconColorHighlight=777620&fcHighlight=777620&borderColorHighlight=dad55e&bgTextureHighlight=flat&bgColorHighlight=fffa90&iconColorActive=ffffff&fcActive=ffffff&borderColorActive=003eff&bgTextureActive=flat&bgColorActive=007fff&iconColorHover=555555&fcHover=2b2b2b&borderColorHover=cccccc&bgTextureHover=flat&bgColorHover=ededed&iconColorDefault=777777&fcDefault=454545&borderColorDefault=c5c5c5&bgTextureDefault=flat&bgColorDefault=f6f6f6&iconColorContent=444444&fcContent=333333&borderColorContent=dddddd&bgTextureContent=flat&bgColorContent=ffffff&iconColorHeader=444444&fcHeader=333333&borderColorHeader=dddddd&bgTextureHeader=flat&bgColorHeader=e9e9e9&cornerRadius=3px&fwDefault=normal&fsDefault=1em&ffDefault=Arial%2CHelvetica%2Csans-serif
* Copyright jQuery Foundation and other contributors; Licensed MIT */

.ui-draggable-handle {
  -ms-touch-action: none;
  touch-action: none;
}
/* Layout helpers
----------------------------------*/
.ui-helper-hidden {
  display: none;
}
.ui-helper-hidden-accessible {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
.ui-helper-reset {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  line-height: 1.3;
  text-decoration: none;
  font-size: 100%;
  list-style: none;
}
.ui-helper-clearfix:before,
.ui-helper-clearfix:after {
  content: "";
  display: table;
  border-collapse: collapse;
}
.ui-helper-clearfix:after {
  clear: both;
}
.ui-helper-zfix {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: absolute;
  opacity: 0;
  filter: Alpha(Opacity=0); /* support: IE8 */
}

.ui-front {
  z-index: 100;
}

/* Interaction Cues
----------------------------------*/
.ui-state-disabled {
  cursor: default !important;
  pointer-events: none;
}

/* Icons
----------------------------------*/
.ui-icon {
  display: inline-block;
  vertical-align: middle;
  margin-top: -0.25em;
  position: relative;
  text-indent: -99999px;
  overflow: hidden;
  background-repeat: no-repeat;
}

.ui-widget-icon-block {
  left: 50%;
  margin-left: -8px;
  display: block;
}

/* Misc visuals
----------------------------------*/

/* Overlays */
.ui-widget-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.ui-resizable {
  position: relative;
}
.ui-resizable-handle {
  position: absolute;
  font-size: 0.1px;
  display: block;
  -ms-touch-action: none;
  touch-action: none;
}
.ui-resizable-disabled .ui-resizable-handle,
.ui-resizable-autohide .ui-resizable-handle {
  display: none;
}
.ui-resizable-n {
  cursor: n-resize;
  height: 7px;
  width: 100%;
  top: -5px;
  left: 0;
}
.ui-resizable-s {
  cursor: s-resize;
  height: 7px;
  width: 100%;
  bottom: -5px;
  left: 0;
}
.ui-resizable-e {
  cursor: e-resize;
  width: 7px;
  right: -5px;
  top: 0;
  height: 100%;
}
.ui-resizable-w {
  cursor: w-resize;
  width: 7px;
  left: -5px;
  top: 0;
  height: 100%;
}
.ui-resizable-se {
  cursor: se-resize;
  width: 12px;
  height: 12px;
  right: 1px;
  bottom: 1px;
}
.ui-resizable-sw {
  cursor: sw-resize;
  width: 9px;
  height: 9px;
  left: -5px;
  bottom: -5px;
}
.ui-resizable-nw {
  cursor: nw-resize;
  width: 9px;
  height: 9px;
  left: -5px;
  top: -5px;
}
.ui-resizable-ne {
  cursor: ne-resize;
  width: 9px;
  height: 9px;
  right: -5px;
  top: -5px;
}
.ui-selectable {
  -ms-touch-action: none;
  touch-action: none;
}
.ui-selectable-helper {
  position: absolute;
  z-index: 100;
  border: 1px dotted black;
}
.ui-sortable-handle {
  -ms-touch-action: none;
  touch-action: none;
}
.ui-accordion .ui-accordion-header {
  display: block;
  cursor: pointer;
  position: relative;
  margin: 2px 0 0 0;
  padding: 0.5em 0.5em 0.5em 0.7em;
  font-size: 100%;
}
.ui-accordion .ui-accordion-content {
  padding: 1em 2.2em;
  border-top: 0;
  overflow: auto;
}
.ui-autocomplete {
  position: absolute;
  top: 0;
  left: 0;
  cursor: default;
}
.ui-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  display: block;
  outline: 0;
}
.ui-menu .ui-menu {
  position: absolute;
}
.ui-menu .ui-menu-item {
  margin: 0;
  cursor: pointer;
  /* support: IE10, see #8844 */
  list-style-image: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
}
.ui-menu .ui-menu-item-wrapper {
  position: relative;
  padding: 3px 1em 3px 0.4em;
}
.ui-menu .ui-menu-divider {
  margin: 5px 0;
  height: 0;
  font-size: 0;
  line-height: 0;
  border-width: 1px 0 0 0;
}
.ui-menu .ui-state-focus,
.ui-menu .ui-state-active {
  margin: -1px;
}

/* icon support */
.ui-menu-icons {
  position: relative;
}
.ui-menu-icons .ui-menu-item-wrapper {
  padding-left: 2em;
}

/* left-aligned */
.ui-menu .ui-icon {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0.2em;
  margin: auto 0;
}

/* right-aligned */
.ui-menu .ui-menu-icon {
  left: auto;
  right: 0;
}
.ui-button {
  padding: 0.4em 1em;
  display: inline-block;
  position: relative;
  line-height: normal;
  margin-right: 0.1em;
  cursor: pointer;
  vertical-align: middle;
  text-align: center;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

  /* Support: IE <= 11 */
  overflow: visible;
}

.ui-button,
.ui-button:link,
.ui-button:visited,
.ui-button:hover,
.ui-button:active {
  text-decoration: none;
}

/* to make room for the icon, a width needs to be set here */
.ui-button-icon-only {
  width: 2em;
  box-sizing: border-box;
  text-indent: -9999px;
  white-space: nowrap;
}

/* no icon support for input elements */
input.ui-button.ui-button-icon-only {
  text-indent: 0;
}

/* button icon element(s) */
.ui-button-icon-only .ui-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -8px;
  margin-left: -8px;
}

.ui-button.ui-icon-notext .ui-icon {
  padding: 0;
  width: 2.1em;
  height: 2.1em;
  text-indent: -9999px;
  white-space: nowrap;
}

input.ui-button.ui-icon-notext .ui-icon {
  width: auto;
  height: auto;
  text-indent: 0;
  white-space: normal;
  padding: 0.4em 1em;
}

/* workarounds */
/* Support: Firefox 5 - 40 */
input.ui-button::-moz-focus-inner,
button.ui-button::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.ui-controlgroup {
  vertical-align: middle;
  display: inline-block;
}
.ui-controlgroup > .ui-controlgroup-item {
  float: left;
  margin-left: 0;
  margin-right: 0;
}
.ui-controlgroup > .ui-controlgroup-item:focus,
.ui-controlgroup > .ui-controlgroup-item.ui-visual-focus {
  z-index: 9999;
}
.ui-controlgroup-vertical > .ui-controlgroup-item {
  display: block;
  float: none;
  width: 100%;
  margin-top: 0;
  margin-bottom: 0;
  text-align: left;
}
.ui-controlgroup-vertical .ui-controlgroup-item {
  box-sizing: border-box;
}
.ui-controlgroup .ui-controlgroup-label {
  padding: 0.4em 1em;
}
.ui-controlgroup .ui-controlgroup-label span {
  font-size: 80%;
}
.ui-controlgroup-horizontal .ui-controlgroup-label + .ui-controlgroup-item {
  border-left: none;
}
.ui-controlgroup-vertical .ui-controlgroup-label + .ui-controlgroup-item {
  border-top: none;
}
.ui-controlgroup-horizontal .ui-controlgroup-label.ui-widget-content {
  border-right: none;
}
.ui-controlgroup-vertical .ui-controlgroup-label.ui-widget-content {
  border-bottom: none;
}

/* Spinner specific style fixes */
.ui-controlgroup-vertical .ui-spinner-input {
  /* Support: IE8 only, Android < 4.4 only */
  width: 75%;
  width: calc(100% - 2.4em);
}
.ui-controlgroup-vertical .ui-spinner .ui-spinner-up {
  border-top-style: solid;
}

.ui-checkboxradio-label .ui-icon-background {
  box-shadow: inset 1px 1px 1px #ccc;
  border-radius: 0.12em;
  border: none;
}
.ui-checkboxradio-radio-label .ui-icon-background {
  width: 16px;
  height: 16px;
  border-radius: 1em;
  overflow: visible;
  border: none;
}
.ui-checkboxradio-radio-label.ui-checkboxradio-checked .ui-icon,
.ui-checkboxradio-radio-label.ui-checkboxradio-checked:hover .ui-icon {
  background-image: none;
  width: 8px;
  height: 8px;
  border-width: 4px;
  border-style: solid;
}
.ui-checkboxradio-disabled {
  pointer-events: none;
}
.ui-datepicker {
  width: 17em;
  padding: 0.2em 0.2em 0;
  display: none;
}
.ui-datepicker .ui-datepicker-header {
  position: relative;
  padding: 0.2em 0;
}
.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
  position: absolute;
  top: 2px;
  width: 1.8em;
  height: 1.8em;
}
.ui-datepicker .ui-datepicker-prev-hover,
.ui-datepicker .ui-datepicker-next-hover {
  top: 1px;
}
.ui-datepicker .ui-datepicker-prev {
  left: 2px;
}
.ui-datepicker .ui-datepicker-next {
  right: 2px;
}
.ui-datepicker .ui-datepicker-prev-hover {
  left: 1px;
}
.ui-datepicker .ui-datepicker-next-hover {
  right: 1px;
}
.ui-datepicker .ui-datepicker-prev span,
.ui-datepicker .ui-datepicker-next span {
  display: block;
  position: absolute;
  left: 50%;
  margin-left: -8px;
  top: 50%;
  margin-top: -8px;
}
.ui-datepicker .ui-datepicker-title {
  margin: 0 2.3em;
  line-height: 1.8em;
  text-align: center;
}
.ui-datepicker .ui-datepicker-title select {
  font-size: 1em;
  margin: 1px 0;
}
.ui-datepicker select.ui-datepicker-month,
.ui-datepicker select.ui-datepicker-year {
  width: 45%;
}
.ui-datepicker table {
  width: 100%;
  font-size: 0.9em;
  border-collapse: collapse;
  margin: 0 0 0.4em;
}
.ui-datepicker th {
  padding: 0.7em 0.3em;
  text-align: center;
  font-weight: bold;
  border: 0;
}
.ui-datepicker td {
  border: 0;
  padding: 1px;
}
.ui-datepicker td span,
.ui-datepicker td a {
  display: block;
  padding: 0.2em;
  text-align: right;
  text-decoration: none;
}
.ui-datepicker .ui-datepicker-buttonpane {
  background-image: none;
  margin: 0.7em 0 0 0;
  padding: 0 0.2em;
  border-left: 0;
  border-right: 0;
  border-bottom: 0;
}
.ui-datepicker .ui-datepicker-buttonpane button {
  float: right;
  margin: 0.5em 0.2em 0.4em;
  cursor: pointer;
  padding: 0.2em 0.6em 0.3em 0.6em;
  width: auto;
  overflow: visible;
}
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
  float: left;
}

/* with multiple calendars */
.ui-datepicker.ui-datepicker-multi {
  width: auto;
}
.ui-datepicker-multi .ui-datepicker-group {
  float: left;
}
.ui-datepicker-multi .ui-datepicker-group table {
  width: 95%;
  margin: 0 auto 0.4em;
}
.ui-datepicker-multi-2 .ui-datepicker-group {
  width: 50%;
}
.ui-datepicker-multi-3 .ui-datepicker-group {
  width: 33.3%;
}
.ui-datepicker-multi-4 .ui-datepicker-group {
  width: 25%;
}
.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
  border-left-width: 0;
}
.ui-datepicker-multi .ui-datepicker-buttonpane {
  clear: left;
}
.ui-datepicker-row-break {
  clear: both;
  width: 100%;
  font-size: 0;
}

/* RTL support */
.ui-datepicker-rtl {
  direction: rtl;
}
.ui-datepicker-rtl .ui-datepicker-prev {
  right: 2px;
  left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next {
  left: 2px;
  right: auto;
}
.ui-datepicker-rtl .ui-datepicker-prev:hover {
  right: 1px;
  left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next:hover {
  left: 1px;
  right: auto;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane {
  clear: right;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button {
  float: left;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
.ui-datepicker-rtl .ui-datepicker-group {
  float: right;
}
.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
  border-right-width: 0;
  border-left-width: 1px;
}

/* Icons */
.ui-datepicker .ui-icon {
  display: block;
  text-indent: -99999px;
  overflow: hidden;
  background-repeat: no-repeat;
  left: 0.5em;
  top: 0.3em;
}
.ui-dialog {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.2em;
  outline: 0;
}
.ui-dialog .ui-dialog-titlebar {
  padding: 0.4em 1em;
  position: relative;
}
.ui-dialog .ui-dialog-title {
  float: left;
  margin: 0.1em 0;
  white-space: nowrap;
  width: 90%;
  overflow: hidden;
  text-overflow: ellipsis;
}
.ui-dialog .ui-dialog-titlebar-close {
  position: absolute;
  right: 0.3em;
  top: 50%;
  width: 20px;
  margin: -10px 0 0 0;
  padding: 1px;
  height: 20px;
}
.ui-dialog .ui-dialog-content {
  position: relative;
  border: 0;
  padding: 0.5em 1em;
  background: none;
  overflow: auto;
}
.ui-dialog .ui-dialog-buttonpane {
  text-align: left;
  border-width: 1px 0 0 0;
  background-image: none;
  margin-top: 0.5em;
  padding: 0.3em 1em 0.5em 0.4em;
}
.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
  float: right;
}
.ui-dialog .ui-dialog-buttonpane button {
  margin: 0.5em 0.4em 0.5em 0;
  cursor: pointer;
}
.ui-dialog .ui-resizable-n {
  height: 2px;
  top: 0;
}
.ui-dialog .ui-resizable-e {
  width: 2px;
  right: 0;
}
.ui-dialog .ui-resizable-s {
  height: 2px;
  bottom: 0;
}
.ui-dialog .ui-resizable-w {
  width: 2px;
  left: 0;
}
.ui-dialog .ui-resizable-se,
.ui-dialog .ui-resizable-sw,
.ui-dialog .ui-resizable-ne,
.ui-dialog .ui-resizable-nw {
  width: 7px;
  height: 7px;
}
.ui-dialog .ui-resizable-se {
  right: 0;
  bottom: 0;
}
.ui-dialog .ui-resizable-sw {
  left: 0;
  bottom: 0;
}
.ui-dialog .ui-resizable-ne {
  right: 0;
  top: 0;
}
.ui-dialog .ui-resizable-nw {
  left: 0;
  top: 0;
}
.ui-draggable .ui-dialog-titlebar {
  cursor: move;
}
.ui-progressbar {
  height: 2em;
  text-align: left;
  overflow: hidden;
}
.ui-progressbar .ui-progressbar-value {
  margin: -1px;
  height: 100%;
}
.ui-progressbar .ui-progressbar-overlay {
  background: url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");
  height: 100%;
  filter: alpha(opacity=25); /* support: IE8 */
  opacity: 0.25;
}
.ui-progressbar-indeterminate .ui-progressbar-value {
  background-image: none;
}
.ui-selectmenu-menu {
  padding: 0;
  margin: 0;
  position: absolute;
  top: 0;
  left: 0;
  display: none;
}
.ui-selectmenu-menu .ui-menu {
  overflow: auto;
  overflow-x: hidden;
  padding-bottom: 1px;
}
.ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup {
  font-size: 1em;
  font-weight: bold;
  line-height: 1.5;
  padding: 2px 0.4em;
  margin: 0.5em 0 0 0;
  height: auto;
  border: 0;
}
.ui-selectmenu-open {
  display: block;
}
.ui-selectmenu-text {
  display: block;
  margin-right: 20px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.ui-selectmenu-button.ui-button {
  text-align: left;
  white-space: nowrap;
  width: 14em;
}
.ui-selectmenu-icon.ui-icon {
  float: right;
  margin-top: 0;
}
.ui-slider {
  position: relative;
  text-align: left;
}
.ui-slider .ui-slider-handle {
  position: absolute;
  z-index: 2;
  width: 1.2em;
  height: 1.2em;
  cursor: default;
  -ms-touch-action: none;
  touch-action: none;
}
.ui-slider .ui-slider-range {
  position: absolute;
  z-index: 1;
  font-size: 0.7em;
  display: block;
  border: 0;
  background-position: 0 0;
}

.ui-spinner {
  position: relative;
  display: inline-block;
  overflow: hidden;
  padding: 0;
  vertical-align: middle;
}
.ui-spinner-input {
  border: none;
  background: none;
  color: inherit;
  padding: 0.222em 0;
  margin: 0.2em 0;
  vertical-align: middle;
  margin-left: 0.4em;
  margin-right: 2em;
}
.ui-spinner-button {
  width: 1.6em;
  height: 50%;
  font-size: 0.5em;
  padding: 0;
  margin: 0;
  text-align: center;
  position: absolute;
  cursor: default;
  display: block;
  overflow: hidden;
  right: 0;
}
/* more specificity required here to override default borders */
.ui-spinner a.ui-spinner-button {
  border-top-style: none;
  border-bottom-style: none;
  border-right-style: none;
}
.ui-spinner-up {
  top: 0;
}
.ui-spinner-down {
  bottom: 0;
}
.ui-tabs {
  position: relative; /* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */
  padding: 0.2em;
}
.ui-tabs .ui-tabs-nav {
  margin: 0;
  padding: 0.2em 0.2em 0;
}
.ui-tabs .ui-tabs-nav li {
  list-style: none;
  float: left;
  position: relative;
  top: 0;
  margin: 1px 0.2em 0 0;
  border-bottom-width: 0;
  padding: 0;
  white-space: nowrap;
}
.ui-tabs .ui-tabs-nav .ui-tabs-anchor {
  float: left;
  padding: 0.5em 1em;
  text-decoration: none;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active {
  margin-bottom: -1px;
  padding-bottom: 1px;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor {
  cursor: text;
}
.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor {
  cursor: pointer;
}
.ui-tabs .ui-tabs-panel {
  display: block;
  border-width: 0;
  padding: 1em 1.4em;
  background: none;
}
.ui-tooltip {
  padding: 8px;
  position: absolute;
  z-index: 9999;
  max-width: 300px;
}
body .ui-tooltip {
  border-width: 2px;
}

/* Component containers
----------------------------------*/
.ui-widget {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1em;
}
.ui-widget .ui-widget {
  font-size: 1em;
}
.ui-widget input,
.ui-widget select,
.ui-widget textarea,
.ui-widget button {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1em;
}
.ui-widget.ui-widget-content {
  border: 1px solid #c5c5c5;
}
.ui-widget-content {
  border: 1px solid #dddddd;
  background: #ffffff;
  color: #333333;
}
.ui-widget-content a {
  color: #333333;
}
.ui-widget-header {
  border: 1px solid #dddddd;
  background: #e9e9e9;
  color: #333333;
  font-weight: bold;
}
.ui-widget-header a {
  color: #333333;
}

/* Interaction states
----------------------------------*/
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default,
.ui-button,

/* We use html here because we need a greater specificity to make sure disabled
works properly when clicked or hovered */
html .ui-button.ui-state-disabled:hover,
html .ui-button.ui-state-disabled:active {
  border: 1px solid #c5c5c5;
  background: #f6f6f6;
  font-weight: normal;
  color: #454545;
}
.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited,
a.ui-button,
a:link.ui-button,
a:visited.ui-button,
.ui-button {
  color: #454545;
  text-decoration: none;
}
.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus,
.ui-button:hover,
.ui-button:focus {
  border: 1px solid #cccccc;
  background: #ededed;
  font-weight: normal;
  color: #2b2b2b;
}
.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited,
.ui-state-focus a,
.ui-state-focus a:hover,
.ui-state-focus a:link,
.ui-state-focus a:visited,
a.ui-button:hover,
a.ui-button:focus {
  color: #2b2b2b;
  text-decoration: none;
}

.ui-visual-focus {
  box-shadow: 0 0 3px 1px rgb(94, 158, 214);
}
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active,
.ui-button:active,
.ui-button.ui-state-active:hover {
  border: 1px solid #003eff;
  background: #007fff;
  font-weight: normal;
  color: #ffffff;
}
.ui-icon-background,
.ui-state-active .ui-icon-background {
  border: #003eff;
  background-color: #ffffff;
}
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
  color: #ffffff;
  text-decoration: none;
}

/* Interaction Cues
----------------------------------*/
.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
  border: 1px solid #dad55e;
  background: #fffa90;
  color: #777620;
}
.ui-state-checked {
  border: 1px solid #dad55e;
  background: #fffa90;
}
.ui-state-highlight a,
.ui-widget-content .ui-state-highlight a,
.ui-widget-header .ui-state-highlight a {
  color: #777620;
}
.ui-state-error,
.ui-widget-content .ui-state-error,
.ui-widget-header .ui-state-error {
  border: 1px solid #f1a899;
  background: #fddfdf;
  color: #5f3f3f;
}
.ui-state-error a,
.ui-widget-content .ui-state-error a,
.ui-widget-header .ui-state-error a {
  color: #5f3f3f;
}
.ui-state-error-text,
.ui-widget-content .ui-state-error-text,
.ui-widget-header .ui-state-error-text {
  color: #5f3f3f;
}
.ui-priority-primary,
.ui-widget-content .ui-priority-primary,
.ui-widget-header .ui-priority-primary {
  font-weight: bold;
}
.ui-priority-secondary,
.ui-widget-content .ui-priority-secondary,
.ui-widget-header .ui-priority-secondary {
  opacity: 0.7;
  filter: Alpha(Opacity=70); /* support: IE8 */
  font-weight: normal;
}
.ui-state-disabled,
.ui-widget-content .ui-state-disabled,
.ui-widget-header .ui-state-disabled {
  opacity: 0.35;
  filter: Alpha(Opacity=35); /* support: IE8 */
  background-image: none;
}
.ui-state-disabled .ui-icon {
  filter: Alpha(Opacity=35); /* support: IE8 - See #6059 */
}

/* Icons
----------------------------------*/

/* states and images */
.ui-icon {
  width: 16px;
  height: 16px;
}
.ui-icon,
.ui-widget-content .ui-icon {
  background-image: url("images/ui-icons_444444_256x240.png");
}
.ui-widget-header .ui-icon {
  background-image: url("images/ui-icons_444444_256x240.png");
}
.ui-state-hover .ui-icon,
.ui-state-focus .ui-icon,
.ui-button:hover .ui-icon,
.ui-button:focus .ui-icon {
  background-image: url("images/ui-icons_555555_256x240.png");
}
.ui-state-active .ui-icon,
.ui-button:active .ui-icon {
  background-image: url("images/ui-icons_ffffff_256x240.png");
}
.ui-state-highlight .ui-icon,
.ui-button .ui-state-highlight.ui-icon {
  background-image: url("images/ui-icons_777620_256x240.png");
}
.ui-state-error .ui-icon,
.ui-state-error-text .ui-icon {
  background-image: url("images/ui-icons_cc0000_256x240.png");
}
.ui-button .ui-icon {
  background-image: url("images/ui-icons_777777_256x240.png");
}

/* positioning */
.ui-icon-blank {
  background-position: 16px 16px;
}
.ui-icon-caret-1-n {
  background-position: 0 0;
}
.ui-icon-caret-1-ne {
  background-position: -16px 0;
}
.ui-icon-caret-1-e {
  background-position: -32px 0;
}
.ui-icon-caret-1-se {
  background-position: -48px 0;
}
.ui-icon-caret-1-s {
  background-position: -65px 0;
}
.ui-icon-caret-1-sw {
  background-position: -80px 0;
}
.ui-icon-caret-1-w {
  background-position: -96px 0;
}
.ui-icon-caret-1-nw {
  background-position: -112px 0;
}
.ui-icon-caret-2-n-s {
  background-position: -128px 0;
}
.ui-icon-caret-2-e-w {
  background-position: -144px 0;
}
.ui-icon-triangle-1-n {
  background-position: 0 -16px;
}
.ui-icon-triangle-1-ne {
  background-position: -16px -16px;
}
.ui-icon-triangle-1-e {
  background-position: -32px -16px;
}
.ui-icon-triangle-1-se {
  background-position: -48px -16px;
}
.ui-icon-triangle-1-s {
  background-position: -65px -16px;
}
.ui-icon-triangle-1-sw {
  background-position: -80px -16px;
}
.ui-icon-triangle-1-w {
  background-position: -96px -16px;
}
.ui-icon-triangle-1-nw {
  background-position: -112px -16px;
}
.ui-icon-triangle-2-n-s {
  background-position: -128px -16px;
}
.ui-icon-triangle-2-e-w {
  background-position: -144px -16px;
}
.ui-icon-arrow-1-n {
  background-position: 0 -32px;
}
.ui-icon-arrow-1-ne {
  background-position: -16px -32px;
}
.ui-icon-arrow-1-e {
  background-position: -32px -32px;
}
.ui-icon-arrow-1-se {
  background-position: -48px -32px;
}
.ui-icon-arrow-1-s {
  background-position: -65px -32px;
}
.ui-icon-arrow-1-sw {
  background-position: -80px -32px;
}
.ui-icon-arrow-1-w {
  background-position: -96px -32px;
}
.ui-icon-arrow-1-nw {
  background-position: -112px -32px;
}
.ui-icon-arrow-2-n-s {
  background-position: -128px -32px;
}
.ui-icon-arrow-2-ne-sw {
  background-position: -144px -32px;
}
.ui-icon-arrow-2-e-w {
  background-position: -160px -32px;
}
.ui-icon-arrow-2-se-nw {
  background-position: -176px -32px;
}
.ui-icon-arrowstop-1-n {
  background-position: -192px -32px;
}
.ui-icon-arrowstop-1-e {
  background-position: -208px -32px;
}
.ui-icon-arrowstop-1-s {
  background-position: -224px -32px;
}
.ui-icon-arrowstop-1-w {
  background-position: -240px -32px;
}
.ui-icon-arrowthick-1-n {
  background-position: 1px -48px;
}
.ui-icon-arrowthick-1-ne {
  background-position: -16px -48px;
}
.ui-icon-arrowthick-1-e {
  background-position: -32px -48px;
}
.ui-icon-arrowthick-1-se {
  background-position: -48px -48px;
}
.ui-icon-arrowthick-1-s {
  background-position: -64px -48px;
}
.ui-icon-arrowthick-1-sw {
  background-position: -80px -48px;
}
.ui-icon-arrowthick-1-w {
  background-position: -96px -48px;
}
.ui-icon-arrowthick-1-nw {
  background-position: -112px -48px;
}
.ui-icon-arrowthick-2-n-s {
  background-position: -128px -48px;
}
.ui-icon-arrowthick-2-ne-sw {
  background-position: -144px -48px;
}
.ui-icon-arrowthick-2-e-w {
  background-position: -160px -48px;
}
.ui-icon-arrowthick-2-se-nw {
  background-position: -176px -48px;
}
.ui-icon-arrowthickstop-1-n {
  background-position: -192px -48px;
}
.ui-icon-arrowthickstop-1-e {
  background-position: -208px -48px;
}
.ui-icon-arrowthickstop-1-s {
  background-position: -224px -48px;
}
.ui-icon-arrowthickstop-1-w {
  background-position: -240px -48px;
}
.ui-icon-arrowreturnthick-1-w {
  background-position: 0 -64px;
}
.ui-icon-arrowreturnthick-1-n {
  background-position: -16px -64px;
}
.ui-icon-arrowreturnthick-1-e {
  background-position: -32px -64px;
}
.ui-icon-arrowreturnthick-1-s {
  background-position: -48px -64px;
}
.ui-icon-arrowreturn-1-w {
  background-position: -64px -64px;
}
.ui-icon-arrowreturn-1-n {
  background-position: -80px -64px;
}
.ui-icon-arrowreturn-1-e {
  background-position: -96px -64px;
}
.ui-icon-arrowreturn-1-s {
  background-position: -112px -64px;
}
.ui-icon-arrowrefresh-1-w {
  background-position: -128px -64px;
}
.ui-icon-arrowrefresh-1-n {
  background-position: -144px -64px;
}
.ui-icon-arrowrefresh-1-e {
  background-position: -160px -64px;
}
.ui-icon-arrowrefresh-1-s {
  background-position: -176px -64px;
}
.ui-icon-arrow-4 {
  background-position: 0 -80px;
}
.ui-icon-arrow-4-diag {
  background-position: -16px -80px;
}
.ui-icon-extlink {
  background-position: -32px -80px;
}
.ui-icon-newwin {
  background-position: -48px -80px;
}
.ui-icon-refresh {
  background-position: -64px -80px;
}
.ui-icon-shuffle {
  background-position: -80px -80px;
}
.ui-icon-transfer-e-w {
  background-position: -96px -80px;
}
.ui-icon-transferthick-e-w {
  background-position: -112px -80px;
}
.ui-icon-folder-collapsed {
  background-position: 0 -96px;
}
.ui-icon-folder-open {
  background-position: -16px -96px;
}
.ui-icon-document {
  background-position: -32px -96px;
}
.ui-icon-document-b {
  background-position: -48px -96px;
}
.ui-icon-note {
  background-position: -64px -96px;
}
.ui-icon-mail-closed {
  background-position: -80px -96px;
}
.ui-icon-mail-open {
  background-position: -96px -96px;
}
.ui-icon-suitcase {
  background-position: -112px -96px;
}
.ui-icon-comment {
  background-position: -128px -96px;
}
.ui-icon-person {
  background-position: -144px -96px;
}
.ui-icon-print {
  background-position: -160px -96px;
}
.ui-icon-trash {
  background-position: -176px -96px;
}
.ui-icon-locked {
  background-position: -192px -96px;
}
.ui-icon-unlocked {
  background-position: -208px -96px;
}
.ui-icon-bookmark {
  background-position: -224px -96px;
}
.ui-icon-tag {
  background-position: -240px -96px;
}
.ui-icon-home {
  background-position: 0 -112px;
}
.ui-icon-flag {
  background-position: -16px -112px;
}
.ui-icon-calendar {
  background-position: -32px -112px;
}
.ui-icon-cart {
  background-position: -48px -112px;
}
.ui-icon-pencil {
  background-position: -64px -112px;
}
.ui-icon-clock {
  background-position: -80px -112px;
}
.ui-icon-disk {
  background-position: -96px -112px;
}
.ui-icon-calculator {
  background-position: -112px -112px;
}
.ui-icon-zoomin {
  background-position: -128px -112px;
}
.ui-icon-zoomout {
  background-position: -144px -112px;
}
.ui-icon-search {
  background-position: -160px -112px;
}
.ui-icon-wrench {
  background-position: -176px -112px;
}
.ui-icon-gear {
  background-position: -192px -112px;
}
.ui-icon-heart {
  background-position: -208px -112px;
}
.ui-icon-star {
  background-position: -224px -112px;
}
.ui-icon-link {
  background-position: -240px -112px;
}
.ui-icon-cancel {
  background-position: 0 -128px;
}
.ui-icon-plus {
  background-position: -16px -128px;
}
.ui-icon-plusthick {
  background-position: -32px -128px;
}
.ui-icon-minus {
  background-position: -48px -128px;
}
.ui-icon-minusthick {
  background-position: -64px -128px;
}
.ui-icon-close {
  background-position: -80px -128px;
}
.ui-icon-closethick {
  background-position: -96px -128px;
}
.ui-icon-key {
  background-position: -112px -128px;
}
.ui-icon-lightbulb {
  background-position: -128px -128px;
}
.ui-icon-scissors {
  background-position: -144px -128px;
}
.ui-icon-clipboard {
  background-position: -160px -128px;
}
.ui-icon-copy {
  background-position: -176px -128px;
}
.ui-icon-contact {
  background-position: -192px -128px;
}
.ui-icon-image {
  background-position: -208px -128px;
}
.ui-icon-video {
  background-position: -224px -128px;
}
.ui-icon-script {
  background-position: -240px -128px;
}
.ui-icon-alert {
  background-position: 0 -144px;
}
.ui-icon-info {
  background-position: -16px -144px;
}
.ui-icon-notice {
  background-position: -32px -144px;
}
.ui-icon-help {
  background-position: -48px -144px;
}
.ui-icon-check {
  background-position: -64px -144px;
}
.ui-icon-bullet {
  background-position: -80px -144px;
}
.ui-icon-radio-on {
  background-position: -96px -144px;
}
.ui-icon-radio-off {
  background-position: -112px -144px;
}
.ui-icon-pin-w {
  background-position: -128px -144px;
}
.ui-icon-pin-s {
  background-position: -144px -144px;
}
.ui-icon-play {
  background-position: 0 -160px;
}
.ui-icon-pause {
  background-position: -16px -160px;
}
.ui-icon-seek-next {
  background-position: -32px -160px;
}
.ui-icon-seek-prev {
  background-position: -48px -160px;
}
.ui-icon-seek-end {
  background-position: -64px -160px;
}
.ui-icon-seek-start {
  background-position: -80px -160px;
}
/* ui-icon-seek-first is deprecated, use ui-icon-seek-start instead */
.ui-icon-seek-first {
  background-position: -80px -160px;
}
.ui-icon-stop {
  background-position: -96px -160px;
}
.ui-icon-eject {
  background-position: -112px -160px;
}
.ui-icon-volume-off {
  background-position: -128px -160px;
}
.ui-icon-volume-on {
  background-position: -144px -160px;
}
.ui-icon-power {
  background-position: 0 -176px;
}
.ui-icon-signal-diag {
  background-position: -16px -176px;
}
.ui-icon-signal {
  background-position: -32px -176px;
}
.ui-icon-battery-0 {
  background-position: -48px -176px;
}
.ui-icon-battery-1 {
  background-position: -64px -176px;
}
.ui-icon-battery-2 {
  background-position: -80px -176px;
}
.ui-icon-battery-3 {
  background-position: -96px -176px;
}
.ui-icon-circle-plus {
  background-position: 0 -192px;
}
.ui-icon-circle-minus {
  background-position: -16px -192px;
}
.ui-icon-circle-close {
  background-position: -32px -192px;
}
.ui-icon-circle-triangle-e {
  background-position: -48px -192px;
}
.ui-icon-circle-triangle-s {
  background-position: -64px -192px;
}
.ui-icon-circle-triangle-w {
  background-position: -80px -192px;
}
.ui-icon-circle-triangle-n {
  background-position: -96px -192px;
}
.ui-icon-circle-arrow-e {
  background-position: -112px -192px;
}
.ui-icon-circle-arrow-s {
  background-position: -128px -192px;
}
.ui-icon-circle-arrow-w {
  background-position: -144px -192px;
}
.ui-icon-circle-arrow-n {
  background-position: -160px -192px;
}
.ui-icon-circle-zoomin {
  background-position: -176px -192px;
}
.ui-icon-circle-zoomout {
  background-position: -192px -192px;
}
.ui-icon-circle-check {
  background-position: -208px -192px;
}
.ui-icon-circlesmall-plus {
  background-position: 0 -208px;
}
.ui-icon-circlesmall-minus {
  background-position: -16px -208px;
}
.ui-icon-circlesmall-close {
  background-position: -32px -208px;
}
.ui-icon-squaresmall-plus {
  background-position: -48px -208px;
}
.ui-icon-squaresmall-minus {
  background-position: -64px -208px;
}
.ui-icon-squaresmall-close {
  background-position: -80px -208px;
}
.ui-icon-grip-dotted-vertical {
  background-position: 0 -224px;
}
.ui-icon-grip-dotted-horizontal {
  background-position: -16px -224px;
}
.ui-icon-grip-solid-vertical {
  background-position: -32px -224px;
}
.ui-icon-grip-solid-horizontal {
  background-position: -48px -224px;
}
.ui-icon-gripsmall-diagonal-se {
  background-position: -64px -224px;
}
.ui-icon-grip-diagonal-se {
  background-position: -80px -224px;
}

/* Misc visuals
----------------------------------*/

/* Corner radius */
.ui-corner-all,
.ui-corner-top,
.ui-corner-left,
.ui-corner-tl {
  border-top-left-radius: 3px;
}
.ui-corner-all,
.ui-corner-top,
.ui-corner-right,
.ui-corner-tr {
  border-top-right-radius: 3px;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-left,
.ui-corner-bl {
  border-bottom-left-radius: 3px;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-right,
.ui-corner-br {
  border-bottom-right-radius: 3px;
}

/* Overlays */
.ui-widget-overlay {
  background: #aaaaaa;
  opacity: 0.3;
  filter: Alpha(Opacity=30); /* support: IE8 */
}
.ui-widget-shadow {
  -webkit-box-shadow: 0px 0px 5px #666666;
  box-shadow: 0px 0px 5px #666666;
}

input[type="text"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  margin: 0;
}

.inbox {
  width: 1100px;
  margin: 0 auto;
}
body.on {
  overflow: hidden;
}
.tit h1 {
  font-size: 24px;
}
.content0 {
  text-align: center;
}
.tbox {
  text-align: left;
}
.tbox h2 {
  font-size: 18px;
  color: #333;
  margin-top: 5px;
}
.tbox h3::before {
  width: 5px;
  height: 16px;
  margin-right: 7px;
  background: #ffc107;
  display: inline-block;
  content: "";
}
.tbox h3 {
  font-weight: 600;
  font-size: 20px;
  margin-bottom: 10px;
}
.tbox p {
  margin: 10px 25px;
  color: #000;
  font-size: 16px;
}

.dim_layer {
  z-index: 100000000000000;
  background: rgba(0, 0, 0, 0.75);
  width: 100%;
  position: fixed;
  top: 0;
  height: 100%;
  display: none;
}
.dim_layer .white_area {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-30%, -60%);
}
.privacy {
  display: none;
  line-height: 1.5;
}
.privacy.on {
  display: block;
}
.dim_layer.on {
  display: block;
}
/*
.privacy .white_area .clear .fl:first-child{background-color:#0eb5df; color:#fff; font-size:30px; padding:30px; width:255px;}*/
.privacy .white_area .clear .right_box {
  overflow-y: scroll;
}
.privacy .white_area .clear .fl {
  float: left;
  width: 765px;
  background-color: #fff;
  height: 730px;
  border-right: 1px solid #e5e5e5;
}
.privacy .white_area .clear .fl .tit {
  color: #fff;
  font-size: 22px;
  text-align: center;
  line-height: 80px;
  border-bottom: 1px solid #e5e5e5;
  padding-left: 20px;
  padding: 35px 0;
  background: #e6950c;
}
.checktd .fr {
  background: #403f3f;
  padding: 10px;
  display: inline-block;
  margin-right: 20px;
}
.checktd .fr a {
  color: #fff;
}

.privacy .white_area .clear .fr {
  height: 80px;
}
.privacy .white_area .clear .fr a {
  display: inline-block;
  background-image: url("https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/close_btn.png");
  background-position: center center;
  width: 70px;
  height: 70px;
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
}
.content0 {
  padding: 30px 20px;
}
/*개인정보취급방침*/
.ml20 {
  margin-left: 20px;
}
.ml20_2 {
  margin-left: 20px;
  margin-bottom: -1.5em;
}
.privacy .inbox .intit {
  font-weight: bolder;
  margin: 16px 0;
}
.privacy .inbox table {
  margin: 10px 0;
}
.privacy .inbox table th {
  border: 1px solid #aaa;
  border-bottom: none;
  padding: 5px;
  background: #efefef;
}
.privacy .inbox table th:nth-child(even) {
  border-left: none;
  border-right: none;
}
.privacy .inbox table th:last-child {
  border-right: 1px solid #aaa;
}
.privacy .inbox table td {
  border: 1px solid #aaa;
  padding: 5px;
}
.privacy .inbox table td:nth-child(even) {
  border-left: none;
  border-right: none;
}
.privacy .inbox table td:last-child {
  border-right: 1px solid #aaa;
}
.privacy .inbox table tr:nth-child(odd) td {
  border-top: none;
  border-bottom: none;
}
.privacy .inbox table tr:last-child td {
  border-bottom: 1px solid #aaa;
}

@media screen and (max-width: 1200px) {
  .inbox {
    width: 100%;
  }
  .privacy .white_area .clear .fl {
    width: 80%;
    height: 500px;
  }
  .privacy .white_area .clear .fr a {
    position: absolute;
    top: -15%;
    right: 20%;
  }
  .dim_layer .white_area {
    top: 60%; /* width:90%; */
    left: 40%;
  }
}
/* Slider */
.slick-slider {
  position: relative;

  display: block;
  box-sizing: border-box;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

  -webkit-touch-callout: none;
  -khtml-user-select: none;
  -ms-touch-action: pan-y;
  touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}

.slick-list {
  position: relative;

  display: block;
  overflow: hidden;

  margin: 0;
  padding: 0;
}
.slick-list:focus {
  outline: none;
}
.slick-list.dragging {
  cursor: pointer;
  cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

.slick-track {
  position: relative;
  top: 0;
  left: 0;

  display: block;
}
.slick-track:before,
.slick-track:after {
  display: table;

  content: "";
}
.slick-track:after {
  clear: both;
}
.slick-loading .slick-track {
  visibility: hidden;
}

.slick-slide {
  display: none;
  float: left;

  height: auto;
  min-height: 1px;

  box-shadow: none;
  border-color: none;
  color: none;
  background: none;
  outline: none;
}
[dir="rtl"] .slick-slide {
  float: right;
}
.slick-slide img {
  display: block;
}
.slick-slide.slick-loading img {
  display: none;
}
.slick-slide.dragging img {
  pointer-events: none;
}
.slick-initialized .slick-slide {
  display: block;
}
.slick-loading .slick-slide {
  visibility: hidden;
}
.slick-vertical .slick-slide {
  display: block;

  height: auto;

  border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
  display: none;
}

body {
  min-width: 360px;
  background-color: #fff;
  color: #505050;
  position: relative;
}

/* Layout */
.container {
  max-width: 1200px;
  min-width: 360px;
  width: 90%;
  margin: 0 auto;
  box-sizing: border-box;
}

#header {
  position: fixed;
  top: 0;
  left: 0;
  background-color: #1a1a1a;
  width: 100%;
  height: 80px;
  z-index: 100;
  -webkit-transition: all 0.5s ease 0.25s;
  transition: all 0.5s ease 0.25s;
}
#header > .inner {
  max-width: 1800px;
  width: 95%;
  margin: 0 auto;
  min-width: 360px;
}
#header > .inner:before,
#header > .inner:after {
  content: "";
  display: table;
}
#header > .inner:after {
  clear: both;
}
#header .header_logo {
  float: left;
}
#header .header_nav {
  float: right;
}
#header .header_nav > ul {
}
#header .header_nav > ul > li {
  display: inline-block;
  padding: 0 10px;
  position: relative;
}
#header .header_nav > ul > li a {
  font-size: 1em;
  line-height: 23px;
  color: #fff;
  display: block;
  padding: 28px 5px;
}
#header .header_nav > ul > li.active > a,
#header .header_nav > ul > li a:hover {
  color: #f9c059;
}
#header .header_nav > ul > li.lang > a {
  position: relative;
  padding-right: 15px;
}
#header .header_nav > ul > li.lang > a:after {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  margin-top: -2px;
  width: 7px;
  height: 4px;
  background: url(../images/common/arrow_down_w.png) center no-repeat;
}
#header .header_nav > ul > li > ul {
  display: none;
  position: absolute;
  top: 100%;
  right: 0;
  margin: 0 15px 0 5px;
  background-color: #1a1a1a;
}
#header .header_nav > ul > li.open > ul {
  display: block;
}
#header .header_nav > ul > li > ul > li {
  padding: 0 5px;
}
#header .header_nav > ul > li > ul > li > a {
  padding: 5px;
}
#header .header_nav > ul > li > ul > li.active > a {
  color: #f9c059;
}
#header .m_util {
  float: right;
  display: none;
}
#header .m_util > .lang {
  overflow: hidden;
  float: left;
}
#header .m_util > .lang li {
  float: left;
  position: relative;
  padding: 0 12px;
}
#header .m_util > .lang li:before {
  border-left: 1px solid #767676;
  content: "";
  position: absolute;
  top: 50%;
  left: 0;
  width: 1px;
  height: 12px;
  margin-top: -6px;
}
#header .m_util > .lang li:first-child:before {
  border: none;
}
#header .m_util > .lang li a {
  color: #b8b8b8;
  font-size: 20px;
  line-height: 60px;
  display: block;
  padding: 10px 0;
}
#header .m_util > .lang li.active a {
  color: #f9c059;
}
#header .m_util > .m_btns {
  overflow: hidden;
  float: left;
  width: 48px;
  height: 35px;
  margin-left: 20px;
  padding: 22.5px 0;
}
#header .m_util > .m_btns a.menu_open {
  width: 47px;
  height: 29px;
  background: url("../images/common/menu_open.png") center no-repeat;
  text-indent: -9999px;
  display: block;
}
#header .m_util > .m_btns a.menu_close {
  width: 30px;
  height: 30px;
  background: url("../images/common/menu_close.png") center no-repeat;
  text-indent: -9999px;
  display: none;
}
#header .m_util > .m_btns.active a.menu_open {
  display: none;
}
#header .m_util > .m_btns.active a.menu_close {
  display: block;
}

#footer {
  background-color: #373737;
}
#footer .footer_top {
  overflow: hidden;
  height: 55px;
  position: relative;
  box-sizing: border-box;
  border-bottom: 1px solid #494949;
}
#footer .footer_top .inner {
  position: relative;
}
#footer .footer_top ul {
  overflow: hidden;
  padding: 10px 0;
  float: left;
}
#footer .footer_top ul li {
  float: left;
  position: relative;
  padding: 0 12px;
}
#footer .footer_top ul li:before {
  border-left: 1px solid #767676;
  content: "";
  position: absolute;
  top: 50%;
  left: 0;
  width: 1px;
  height: 12px;
  margin-top: -6px;
}
#footer .footer_top a {
  color: #bdbdbd;
  font-size: 13px;
  line-height: 35px;
}
#footer .footer_top a:hover {
  color: #fff;
}
#footer .footer_top ul li:first-child {
  padding-left: 0;
}
#footer .footer_top ul li:first-child:before {
  border: none;
}
#footer .footer_top .btn_more {
  display: none;
  position: absolute;
  top: 13px;
  right: 0;
  width: 45px;
  height: 25px;
  background: url("../images/common/btn_footer_more.png") center no-repeat;
  text-indent: -9999px;
}
#footer .footer_top.active .btn_more {
  display: block;
}
#footer .footer_top.active .inner {
  padding-right: 55px;
}
#footer .footer_top.on {
  height: auto;
}
#footer .footer_top .btn_top {
  float: right;
  height: 55px;
  cursor: pointer;
  border: 0;
  color: #fff;
  background-color: transparent;
  padding-top: 15px;
  font-size: 13px;
  position: relative;
}
#footer .footer_top .btn_top:before {
  content: "";
  position: absolute;
  top: 10px;
  left: 50%;
  background: url("../images/common/top_arrow.png") center no-repeat;
  width: 15px;
  height: 8px;
  margin-left: -7.5px;
}

#footer .footer_bottom {
  padding: 30px 0;
  color: #bdbdbd;
}
#footer .footer_bottom .inner {
  position: relative;
}
#footer .footer_bottom .site_info {
  position: relative;
  padding-left: 180px;
  box-sizing: border-box;
  margin-bottom: 30px;
}
#footer .footer_bottom .site_info .footer_logo {
  position: absolute;
  top: -10px;
  left: 0;
  display: inline-block;
}
#footer .footer_bottom .site_info ul {
  overflow: hidden;
  margin-bottom: 10px;
}
#footer .footer_bottom .site_info ul.site_info_1 {
  margin-bottom: 0;
}
#footer .footer_bottom .site_info ul.site_info_2 {
  max-width: 600px;
}
#footer .footer_bottom .site_info ul li {
  font-size: 12px;
  line-height: 22px;
  color: #bdbdbd;
  float: left;
  margin-right: 15px;
}
#footer .footer_bottom .site_info ul li a {
  color: #bdbdbd;
}
#footer .footer_bottom .site_info ul li span {
  font-weight: bold;
}
#footer .footer_bottom .site_info .copyright {
  padding-bottom: 5px;
  font-size: 12px;
  line-height: 17px;
  color: #bdbdbd;
}
#footer .footer_bottom .bank_info {
  position: absolute;
  top: 0;
  right: 0;
}
#footer .footer_bottom .bank_info p {
  font-size: 13px;
  line-height: 20px;
  margin-bottom: 5px;
}
#footer .footer_bottom .bank_info .acount_num {
  font-size: 18px;
  line-height: 20px;
  font-weight: bold;
}
#footer .footer_bottom .bank_info .acount_num a {
  color: #bdbdbd;
}
#footer .footer_bottom .bank_info .acount_num img {
  vertical-align: middle;
  margin-right: 10px;
}
#footer .footer_bottom .sns {
  text-align: center;
}
#footer .footer_bottom .sns li {
  display: inline-block;
  padding: 0 10px;
}
#footer .footer_bottom .sns li a {
  opacity: 0.5;
}
#footer .footer_bottom .sns li a:hover {
  opacity: 1;
}

.body {
  padding-top: 80px;
  width: 100%;
  min-height: 800px;
  display: inline-block;
  background: url("../images/common/bg_w.jpg") center no-repeat;
  background-size: cover;
}
.black_body {
  padding: 100px 0;
  background-color: #313131;
  background-color: rgba(0, 0, 0, 0.8);
}
.main_body {
  min-height: 800px;
}

#title_area {
  text-align: center;
  padding: 100px 0 50px;
}
#title_area h1 {
  margin-bottom: 20px;
  font-weight: bold;
}
#title_area h4 {
  margin-bottom: 20px;
  letter-spacing: 5px;
  text-transform: uppercase;
}
#title_area .line {
  background-color: #e6950c;
  width: 1px;
  height: 27px;
  margin: 0 auto;
}

/* MAIN */
#header.main_header {
  background-color: transparent;
  padding-top: 15px;
}
#header.main_header.fixed {
  background-color: #1a1a1a;
  padding-top: 0;
}

#main > section {
  height: 990px;
}
#main > section > .container {
  display: table;
  width: 90%;
  height: 100%;
  position: relative;
  text-align: center;
}
#main > section > .container > .middle {
  display: table-cell;
  vertical-align: middle;
  position: relative;
  padding: 70px 0;
}
#main > section > .container > .top {
  display: table-cell;
  vertical-align: top;
}
#main > section > .container .feature_title {
  text-transform: uppercase;
}
#main_intro {
  background: #1a1a1a url("img/bg_main_intro.jpg") center no-repeat;
  background-size: cover;
}
#main_intro .intro_logo img #main_intro .btn {
  border: 1px solid #b4b4b4;
  color: #b4b4b4;
  font-size: 15px;
  margin-top: 5%;
  width: 210px;
  height: 55px;
  line-height: 55px;
  font-weight: bold;
}
#main_intro .btn:hover {
  border: 1px solid #fff;
  color: #fff;
}

#main_propos {
  background: #000 url("img/bg_main_propos.jpg") center no-repeat;
  background-size: cover;
}
#main_propos .feature_desc span {
  color: #fac05a;
}
#main_propos .tit_top {
  position: absolute;
  top: 10%;
  width: 100%;
}
#main_propos .tit_top .feature_desc {
  font-size: 20px;
  line-height: 35px;
  color: #fff;
  padding-top: 5%;
  max-width: 600px;
  margin: 0 auto;
}
#main_propos .tit_bottom {
  position: absolute;
  bottom: 10%;
  width: 100%;
}
#main_propos .tit_bottom .feature_title {
  line-height: 80px;
  border-bottom: 1px solid #fac05a;
  color: #fff;
  display: inline-block;
}
#main_propos .tit_bottom .feature_title span {
  color: #fac05a;
  font-weight: bold;
}
#main_propos .tit_bottom .feature_desc {
  font-size: 16px;
  line-height: 25px;
  color: #fff;
  padding-top: 5%;
  max-width: 700px;
  margin: 0 auto;
}

#main_media {
  background: #fff url("../images/main/bg_main_media.png") center no-repeat;
}
#main_media .contant {
  max-width: 660px;
  margin: 0 0 0 auto;
}
#main_media .vod {
  margin-bottom: 50px;
  position: relative;
  min-height: 340px;
}
#main_media .vod .cover_img {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
  background-color: #000;
}
#main_media .vod .cover_img .inner {
  display: table;
  width: 100%;
  height: 100%;
}
#main_media .vod .cover_img .inner span {
  display: table-cell;
  vertical-align: middle;
}
#main_media .row.stats {
  padding-bottom: 60px;
}
#main_media .row.stats .col .stat {
  font-size: 100px;
  line-height: 100px;
  color: #fac05a;
  font-weight: 300;
}
#main_media .row.stats .col p {
  font-size: 14px;
  line-height: 18px;
  color: #5a5a5a;
  text-transform: uppercase;
}
#main_media .row.desc {
  display: table;
}
#main_media .row.desc .txt {
  display: table-cell;
  float: none;
  vertical-align: middle;
  text-align: left;
  font-size: 16px;
  line-height: 28px;
  color: #5a5a5a;
  padding: 0 10px 0 40px;
}
#main_media .row.desc .map {
  display: table-cell;
  float: none;
  vertical-align: middle;
}
#main_media .row.desc .map img {
}

#main_guide {
  background: #222
    url("https://sherlock-holmes.co.kr/images/main/bg_main_guide.jpg") center
    no-repeat;
  background-size: cover;
}
#main_guide .feature_title {
  letter-spacing: 8px;
  font-family: "Noto Sans KR", Arial, sans-serif;
  font-weight: 800;
  padding: 0 0 10% 0;
  color: #8a8a8a;
}
#main_guide .feature_desc {
  text-align: center;
  font-size: 16px;
  line-height: 30px;
  color: #bdbdbd;
  padding-top: 30px;
}
#main_guide .feature_desc p {
  padding-top: 30px;
}

#main_different {
  background: #fff;
}
#main_different .feature_title {
  letter-spacing: 8px;
  font-family: "Noto Sans KR", Arial, sans-serif;
  font-weight: 800;
  padding: 0 0 5% 0;
  color: #000;
}
#main_different .feature_desc {
  font-size: 16px;
  line-height: 30px;
  color: #585757;
  padding-top: 30px;
  padding-bottom: 5%;
}
#main_different .feature_desc p {
  margin-bottom: 30px;
}
#main_different .row .col h4 {
  color: #000;
  text-transform: uppercase;
  letter-spacing: 4px;
  font-family: "Noto Sans KR", Arial, sans-serif;
  font-weight: 800;
  padding-bottom: 10px;
  line-height: 20px;
  height: 40px;
}

#main_stats {
  background-color: #242424;
  height: auto !important;
}
#main_stats .row .col .stat {
  font-size: 40px;
  line-height: 30px;
  color: #fac05a;
  padding-bottom: 25px;
  font-weight: 300;
}
#main_stats .row .col p {
  font-size: 15px;
  line-height: 23px;
  color: #bdbdbd;
  text-transform: uppercase;
  font-family: "Noto Sans KR", Arial, sans-serif;
}

#theme section.feature01 {
  padding-bottom: 100px;
}
#theme section.feature01 .row {
  margin: 0 -2%;
}
#theme section.feature01 .row .col {
  padding: 2%;
}
#theme section.feature01 .row .col:nth-child(1) .tit {
  background: url("../images/theme/tit_01.png") right top no-repeat;
}
#theme section.feature01 .row .col:nth-child(2) .tit {
  background: url("../images/theme/tit_02.png") right top no-repeat;
}
#theme section.feature01 .row .col:nth-child(3) .tit {
  background: url("../images/theme/tit_03.png") right top no-repeat;
}
#theme section.feature01 .tit {
  margin-bottom: 50px;
  max-width: 370px;
}
#theme section.feature01 .tit h2 {
  margin-bottom: 5px;
  font-weight: bold;
  font-size: 32px;
  line-height: 40px;
  color: #2a2a2a;
}
#theme section.feature01 .tit h2 span {
  color: #e6950c;
}
#theme section.feature01 .tit p {
  margin-bottom: 10px;
  font-size: 26px;
  line-height: 40px;
  color: #2a2a2a;
}
#theme section.feature01 .tit .line {
  width: 23px;
  height: 1px;
  background-color: #e6950c;
}
#theme section.feature01 .txt {
  font-size: 16px;
  line-height: 30px;
}
#theme section.feature02 {
  padding-bottom: 100px;
}
#theme section.feature02 .row .col {
  border: 1px solid #c9c9c9;
  padding: 20px;
}
#theme section.feature02 .row .col:nth-child(even) {
  background-color: #fff;
  background-color: rgba(255, 255, 255, 0.5);
}
#theme section.feature02 .img {
  text-align: center;
  margin-bottom: 5px;
}
#theme section.feature02 .txt {
  text-align: center;
}
#theme section.feature02 .txt h2 {
  font-size: 20px;
  line-height: 30px;
  color: #000;
  margin-bottom: 5px;
  font-weight: bold;
}
#theme section.feature02 .txt p {
  font-size: 15px;
  line-height: 20px;
  color: #787878;
  height: 60px;
  overflow: hidden;
}
#theme section.feature03 {
}
#theme section.feature03 .row {
  margin: 0 -1%;
}
#theme section.feature03 .row .col {
  padding: 1%;
  margin-bottom: 25px;
}
#theme section.feature03 .row .col:nth-child(4n-3) {
  clear: both;
}
#theme section.feature03 .img {
  margin-bottom: 15px;
  cursor: pointer;
  position: relative;
}
#theme section.feature03 .img img {
  width: 100%;
}
/* #theme section.feature03 .img:hover .over, */
#theme section.feature03 .img.active .over {
  visibility: visible;
  opacity: 1;
}
#theme section.feature03 .img .over {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url("../images/theme/over_bg.png") center repeat;
  overflow: hidden;
  -webkit-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  -moz-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  -ms-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  -o-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
}
#theme section.feature03 .img .over .inner {
  width: 100%;
  padding: 20px 30px;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  height: 100%;
  overflow-y: auto;
  overflow-x: hidden;
  box-sizing: border-box;
}
#theme section.feature03 .img .over .inner::-webkit-scrollbar {
  width: 0 !important;
  height: 0 !important;
}
#theme section.feature03 .img .over .close {
  position: absolute;
  top: 10px;
  right: 15px;
  z-index: 2;
  text-indent: -99999px;
  width: 25px;
  height: 25px;
  background: url("../images/ico/ico_close.png") center no-repeat;
}
#theme section.feature03 .img .over .tit {
  color: #fff;
  font-size: 17px;
  line-height: 100%;
  margin: 10px 0 15px;
}
#theme section.feature03 .img .over .level {
  margin-bottom: 25px;
  width: 100% !important;
}
#theme section.feature03 .img .over .level span {
  color: #ccc;
  font-size: 15px;
  line-height: 30px;
  display: inline-block;
  margin-right: 10px;
}
#theme section.feature03 .img .over .level .ico {
  width: 15px;
  height: 17px;
}
#theme section.feature03 .img .over .level .level_inner td {
  width: 50%;
}
#theme section.feature03 .img .over .level .level_inner {
  width: 100%;
}
#theme section.feature03 .img .over .desc {
  color: #bababa;
  font-size: 14px;
  line-height: 22px;
  height: auto !important;
}
#theme section.feature03 .opt {
  overflow: hidden;
  position: relative;
  padding-right: 130px;
}
#theme section.feature03 .opt select {
  width: 100%;
}
#theme section.feature03 .opt button {
  width: 120px;
  color: #e6950c;
  position: absolute;
  top: 0;
  right: 0;
}
#theme section.feature03 .medal {
  position: absolute;
  top: 0;
  left: 0;
  width: 70%;
  overflow: hidden;
  padding: 10px 5px;
}
#theme section.feature03 .medal li {
  float: left;
  width: 33.333333%;
  padding: 0 2.5px;
  box-sizing: border-box;
}

#branch section.branch_list {
  padding-bottom: 100px;
}
#branch section.branch_list .selectArea {
  text-align: center;
  margin-bottom: 60px;
}
#branch section.branch_list .selectArea select {
  max-width: 190px;
  margin-bottom: 10px;
}
#branch section.branch_list .row {
  margin: 0 -2%;
}
#branch section.branch_list .row .col {
  float: none;
  display: inline-block;
  text-align: center;
  padding: 0 2%;
  margin-bottom: 40px;
  width: 24.5%;
}
#branch section.branch_list .row .col .img {
  margin-bottom: 30px;
}
#branch section.branch_list .row .col .tit {
  margin-bottom: 10px;
}
#branch section.branch_list .row .col .btn {
  border: 0;
  background-color: transparent;
}
#branch section.branch_list .row .col .ico {
  background-size: 16px;
}

#branch section.branch_view {
}
#branch section.branch_view h2 {
  color: #e6950c;
  font-weight: bold;
  margin-bottom: 30px;
  border-left: 2px solid #e6950c;
  padding-left: 10px;
  line-height: 1;
}
#branch section.branch_view .row {
  margin-bottom: 60px;
}
#branch section.branch_view .col {
  float: right;
}
#branch section.branch_view .map_area {
}
#branch section.branch_view #map {
  margin-bottom: 40px;
  max-height: 360px;
  overflow: hidden;
}
#branch section.branch_view #map img {
  width: 100%;
}
#branch section.branch_view .contact {
  display: table;
  width: 100%;
  margin-bottom: 40px;
}
#branch section.branch_view .contact li {
  display: table-cell;
  padding: 15px 0;
  padding-left: 55px;
  vertical-align: middle;
  min-height: 55px;
  box-sizing: border-box;
  margin-bottom: 10px;
}
#branch section.branch_view .contact li.location {
  font-size: 15px;
  line-height: 22px;
  color: #bababa;
  padding-right: 40px;
  background: url("../images/branch/ico_location.png") left center no-repeat;
}
#branch section.branch_view .contact li.call {
  font-size: 40px;
  line-height: 36px;
  color: #e6950c;
  background: url("../images/branch/ico_call.png") left center no-repeat;
}
#branch section.branch_view .desc {
  line-height: 22px;
  color: #bababa;
  padding-bottom: 40px;
  border-bottom: 1px solid #8b631e;
}
#branch section.branch_view .img_area {
  padding-right: 4%;
  overflow: hidden;
}
#branch section.branch_view .img_area .slider-for {
  position: relative;
}
#branch section.branch_view .img_area .slider-for .item {
  height: auto;
  position: relative;
  max-height: 360px;
}
#branch section.branch_view .img_area .slider-for .item img {
  width: 100%;
}
#branch section.branch_view .img_area .slider-nav {
  overflow: hidden;
  margin-top: 15px;
  position: relative;
}
#branch section.branch_view .img_area .slider-nav:before,
#branch section.branch_view .img_area .slider-nav:after {
  content: "";
  position: absolute;
  top: 0;
  width: 63px;
  height: 100%;
  z-index: 4;
}
#branch section.branch_view .img_area .slider-nav:before {
  background: url(../images/branch/slider_prev_bg.png) center no-repeat;
  background-size: cover;
  left: 0;
}
#branch section.branch_view .img_area .slider-nav:after {
  background: url(../images/branch/slider_next_bg.png) center no-repeat;
  background-size: cover;
  right: 0;
}
#branch section.branch_view .img_area .slider-nav .slick-list {
  margin: 0 -7.5px;
}
#branch section.branch_view .img_area .slider-nav .item {
  width: 33.3333%;
  height: auto;
  float: left;
  cursor: pointer;
  padding: 0 7.5px;
  max-height: 120px;
}
#branch section.branch_view .img_area .slider-nav .slick-arrow {
  color: #fff;
  zoom: 1;
  width: 30px;
  height: 100%;
  border: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  overflow: hidden;
  position: absolute;
  top: 0;
  cursor: pointer;
  z-index: 5;
  text-indent: -9999px;
}
#branch section.branch_view .img_area .slider-nav .slick-prev {
  background: url(../images/branch/slider_prev.png) center center no-repeat;
  left: 0;
}
#branch section.branch_view .img_area .slider-nav .slick-next {
  background: url(../images/branch/slider_next.png) center center no-repeat;
  right: 0;
}

#board section.board_list {
  padding-bottom: 100px;
}
#board section.board_list #board_tab {
  margin-bottom: 35px;
  position: relative;
  border-bottom: 2px solid #1a1a1a;
}
#board section.board_list #board_tab ul {
  overflow: hidden;
}
#board section.board_list #board_tab ul li {
  float: left;
  position: relative;
  display: table;
}
#board section.board_list #board_tab ul li:before {
  background-color: #1a1a1a;
  content: "";
  position: absolute;
  top: 50%;
  right: -1px;
  width: 1px;
  height: 12px;
  margin-top: -6px;
}
,
#board section.board_list #board_tab ul li:last-child {
}
#board section.board_list #board_tab ul li:last-child:before {
  display: none;
}
#board section.board_list #board_tab ul li a {
  word-break: keep-all;
  display: table-cell;
  vertical-align: middle;
  color: #1a1a1a;
  font-size: 15px;
  line-height: 20px;
  height: 60px;
  padding: 0 35px;
  font-weight: bold;
}
#board section.board_list #board_tab ul li a:hover {
  color: #000;
}
#board section.board_list #board_tab ul li.active a {
  color: #fff;
  background-color: #1a1a1a;
}
#board section.board_list #board_tab ul li.active:before {
  display: none;
}
#board section.board_list #board_top {
  position: relative;
  display: inline-block;
  width: 100%;
}
#board section.board_list #board_top .board_info {
  font-size: 14px;
  color: #1a1a1a;
  font-weight: bold;
  position: absolute;
  bottom: 0;
  left: 0;
  margin-bottom: 15px;
}
#board section.board_list #board_top .board_info span {
  color: #e6950c;
}
#board section.board_list #board_top .board_search {
  max-width: 450px;
  margin-left: auto;
  margin-bottom: 15px;
  text-align: right;
}
#board section.board_list #board_top .board_search select {
  max-width: 200px;
}
#board section.board_list #board_list .end {
  color: #999;
}

#board section.board_view {
  padding-bottom: 100px;
}
#board section.board_view #board_view td {
  padding: 20px;
}
#board section.board_view #board_view .view_title {
  font-weight: bold;
}
#board section.board_view #board_view .view_info ul li {
  display: inline-block;
  margin: 5px 0;
  margin-right: 60px;
}
#board section.board_view #board_view .view_info ul li span {
  color: #999;
  margin-right: 10px;
}
#board section.board_view #board_view .view_contants {
  min-height: 300px;
  vertical-align: top;
  display: inline-block;
  width: 100%;
}
#board section.board_view #board_view .pw_area {
  padding: 50px 0;
}
#board section.board_view .btn_group .btn {
  width: 100px;
}

#board section.board_write {
  padding-bottom: 100px;
}
#board section.board_write #board_write th {
  width: 15%;
}
#board section.board_write #board_write td {
}
#board section.board_write #board_write .ipt {
  max-width: 100%;
  width: 100%;
}
#board section.board_write #board_write .selectBranch {
  max-width: 250px;
}
#board section.board_write .btn_group .btn {
  width: 100px;
}

#reservation #title_area .linkArea {
  margin-top: 30px;
}
#reservation #title_area .linkArea li {
  display: inline-block;
  padding: 12px;
  position: relative;
}
#reservation #title_area .linkArea li:nth-child(2):before {
  content: "";
  position: absolute;
  left: -1.5px;
  top: 50%;
  margin-top: -1.5px;
  width: 3px;
  height: 3px;
  background-color: #000;
}
#reservation #title_area .linkArea li a {
  color: #000;
  font-weight: bold;
}
#reservation #title_area .selectArea {
  text-align: center;
  margin-top: 30px;
}
#reservation #title_area .selectArea select {
  max-width: 190px;
  margin-bottom: 10px;
}
#reservation #title_area .selectArea .datepicker {
  margin-bottom: 10px;
  vertical-align: middle;
  max-width: 190px;
}

#reservation section.select_branch_img {
  text-align: center;
}

#reservation section.res_list {
  padding-bottom: 100px;
}
#reservation section.res_list ul li {
  margin-bottom: 60px;
}
#reservation section.res_list .title {
  color: #2a2a2a;
  margin-bottom: 20px;
  line-height: 1.2;
}
#reservation section.res_list .title a {
  white-space: nowrap;
}
#reservation section.res_list .info {
}
#reservation section.res_list .level {
  margin-bottom: 5px;
  display: inline-block;
  margin-right: 20px;
  width: 180px;
}
#reservation section.res_list .level span {
  color: #2a2a2a;
  font-size: 15px;
  line-height: 25px;
  font-weight: bold;
  display: inline-block;
  margin-right: 5px;
  vertical-align: middle;
}
#reservation section.res_list .level .ico {
  width: 20px;
  height: 17px;
  vertical-align: middle;
}
#reservation section.res_list .personnel {
  margin-bottom: 5px;
  display: inline-block;
  font-weight: bold;
  line-height: 25px;
}
#reservation section.res_list .row {
  margin: 0 -7.5px;
}
#reservation section.res_list .col {
  width: 20%;
  text-align: center;
  padding: 7.5px;
}
#reservation section.res_list .col.true a {
  background-color: #eadac2;
  color: #ab6c03;
  display: block;
  padding: 20px 10px;
  opacity: 0.75;
}
#reservation section.res_list .col.true a:hover {
  opacity: 1;
}
#reservation section.res_list .col.false div {
  background-color: #d2d2d2;
  color: #6f6e6e;
  padding: 20px 10px;
  opacity: 0.75;
}
#reservation section.res_list .col .time {
  font-size: 26px;
  line-height: 30px;
}
#reservation section.res_list .col .state {
  font-size: 15px;
  line-height: 20px;
  font-weight: bold;
}

#reservation .write_header {
  text-align: center;
  margin-bottom: 40px;
}
#reservation .write_header h1 {
  font-size: 30px;
  margin-bottom: 30px;
}
#reservation .write_header h2 {
  font-size: 20px;
  line-height: 30px;
}
#reservation .write_header p {
  font-size: 15px;
  line-height: 30px;
}
#reservation .btn_group .btn {
  width: 100%;
  max-width: 160px;
}

#reservation section.res_info_write {
  padding-bottom: 200px;
}
#reservation .write_form {
  width: 100%;
  max-width: 825px;
  margin: 0 auto;
  margin-bottom: 40px;
}
#reservation .write_form table {
  width: 100%;
  border-top: 1px dashed #e6950c;
}
#reservation .write_form table th,
#reservation .write_form table td {
  border-bottom: 1px dashed #c5c5c5;
  padding: 20px 10px;
  vertical-align: middle;
}
#reservation .write_form table th {
  width: 195px;
  background-color: #ddd;
  background-color: rgba(221, 221, 221, 0.5);
}
#reservation .write_form table td {
  padding: 10px;
  padding-left: 30px;
}
#reservation .write_form table td .ipt,
#reservation .write_form table td select {
  height: 40px;
  line-height: 40px;
  max-width: 180px;
  width: 100%;
}
#reservation .write_form table td textarea.ipt {
  max-width: 100%;
  height: 150px;
}
#reservation .write_form .checktd {
  background-color: #e6950c;
  padding: 10px 18px;
  text-align: right;
  color: #fff;
}
#reservation .write_form .checktd .ipt_group {
  margin-bottom: 0;
}
#reservation .write_form .em {
  font-size: 14px;
  color: #e6950c;
  margin-top: 10px;
}
#reservation section.res_info_confirm {
  padding-bottom: 200px;
}

#affiliated section.affiliated {
  padding-bottom: 200px;
}
#affiliated section.affiliated .row .col {
  float: right;
}
#affiliated section.affiliated .row .col:nth-child(1) {
  padding-left: 40px;
}
#affiliated section.affiliated #map {
  margin-bottom: 20px;
}
#affiliated section.affiliated #map img {
  width: 100%;
}
#affiliated section.affiliated .contact_info {
  margin-bottom: 50px;
}
#affiliated section.affiliated .contact_info li {
  padding: 5px 0;
  line-height: 28px;
  position: relative;
  padding-left: 40px;
}
#affiliated section.affiliated .contact_info li .ico {
  width: 25px;
  height: 28px;
  margin-right: 15px;
  position: absolute;
  top: 5px;
  left: 0;
}
#affiliated section.affiliated .request_write {
  background-color: #3d3d3d;
  padding: 60px 20px 20px;
  margin-bottom: 50px;
}
#affiliated section.affiliated .request_write h2 {
  font-size: 30px;
  line-height: 40px;
  color: #fff;
  margin-bottom: 15px;
}
#affiliated section.affiliated .request_write ul li {
  margin-bottom: 10px;
  position: relative;
}
#affiliated section.affiliated .request_write label {
  font-size: 15px;
  line-height: 15px;
  color: #b9b9b9;
  border-right: 1px solid #575757;
  padding: 0 10px 0 20px;
  width: 135px;
  display: inline-block;
  box-sizing: border-box;
  position: absolute;
  top: 23px;
  left: 0;
  z-index: 1px;
}
#affiliated section.affiliated .request_write .ipt {
  border-color: #434343;
  color: #fff;
  background-color: #313131;
  width: 100%;
  padding-left: 160px;
  height: 60px;
}
#affiliated section.affiliated .request_write textarea.ipt {
  box-sizing: border-box;
  height: auto;
  padding-top: 18px;
  padding-bottom: 18px;
}
#affiliated section.affiliated .request_write .btn {
  width: 32.5%;
  color: #fff;
}
#affiliated section.affiliated .request_write .btn:last-child {
  width: 20%;
  color: #fff;
}

#affiliated section.affiliated .request_write .agree {
  width: 45.5%;
  color: #fff;
  font-size: 15px;
  line-height: 15px;
  color: #b9b9b9;
  padding: 0 10px 0 20px;
  display: inline-block;
  box-sizing: border-box;
}
#affiliated section.affiliated .request_write .agree label {
  font-size: 13px;
  line-height: 15px;
  color: #fff;
  border-right: none;
  padding: 0;
  width: 135px;
  display: block;
  box-sizing: border-box;
  position: relative;
  top: 8px;
  left: 0;
  z-index: 1px;
}

#privacy section.feature01 {
  margin-bottom: 100px;
}
#privacy section.feature01 h2 {
  font-size: 18px;
  margin-bottom: 20px;
}
#privacy section.feature01 .tbox {
  margin-bottom: 30px;
}
#privacy section.feature01 h3 {
  font-size: 22px;
  line-height: 1.5;
}
#privacy section.feature01 p {
  font-size: 18px;
  line-height: 1.5;
}

#pop_info {
  max-width: 280px;
  min-width: inherit;
  max-height: 420px;
}
#pop_info .img {
  margin-bottom: 15px;
  cursor: pointer;
  position: relative;
}
#pop_info .img img {
  width: 100%;
}
#pop_info .img.active .over {
  visibility: visible;
  opacity: 1;
}
#pop_info .img .over {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url("../images/theme/over_bg.png") center repeat;
  overflow: hidden;
  -webkit-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  -moz-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  -ms-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  -o-transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
  transition: visibility 0.3s ease-in-out, opacity 0.3s ease-in-out;
}
#pop_info .img .over .inner {
  padding: 20px 30px;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  height: 100%;
  overflow-x: hidden;
  overflow-y: scroll;
  box-sizing: border-box;
}
#pop_info .img .over .inner::-webkit-scrollbar {
  width: 0 !important;
  height: 0 !important;
}
#pop_info .img .over .close {
  position: absolute;
  top: 10px;
  right: 15px;
  z-index: 2;
  text-indent: -99999px;
  width: 25px;
  height: 25px;
  background: url("../images/ico/ico_close.png") center no-repeat;
}
#pop_info .img .over .tit {
  color: #fff;
  font-size: 17px;
  line-height: 100%;
  margin: 10px 0 15px;
}
#pop_info .img .over .level {
  margin-bottom: 20px;
}
#pop_info .img .over .level span {
  color: #ccc;
  font-size: 15px;
  display: inline-block;
  margin-right: 10px;
}
#pop_info .img .over .level .ico {
  width: 15px;
  height: 17px;
}
#pop_info .img .over .desc {
  color: #bababa;
  font-size: 14px;
  line-height: 22px;
  height: auto;
}
#pop_info .opt {
  overflow: hidden;
  position: relative;
  padding-right: 130px;
}
#pop_info .opt select {
  width: 100%;
}
#pop_info .opt button {
  width: 120px;
  color: #e6950c;
  position: absolute;
  top: 0;
  right: 0;
}
#pop_info .medal {
  position: absolute;
  top: 0;
  left: 0;
  width: 70%;
  overflow: hidden;
  padding: 10px 5px;
}
#pop_info .medal li {
  float: left;
  width: 33.333333%;
  padding: 0 2.5px;
  box-sizing: border-box;
}

.info_box {
  max-width: 1200px;
  min-width: 360px;
  width: 90%;
  margin: 0 auto;
}
.info_box h5 {
  text-align: center;
  color: #333399;
  font-size: 20px;
  padding: 0px 0 25px;
}
.info_box .inner {
  margin-bottom: 20px;
}

/*1008 popup 수정*/
#pop_info .level_inner {
  width: 100%;
}
#pop_info .level_inner td {
  width: 50%;
}

.notice_step {
  margin-bottom: 150px;
  width: 100%;
  border: 1px solid #333;
  border-radius: 50px;
  padding: 10px;
  box-sizing: border-box;
}
.notice_step > ul {
  background: rgba(255, 255, 255, 0.5);
  border: 1px dotted #000;
  border-radius: 40px;
  padding: 20px;
  box-sizing: border-box;
}
.notice_step > ul::after {
  content: "";
  clear: both;
  display: block;
}
.notice_step > ul > li {
  line-height: 130%;
  margin-bottom: 0 !important;
  float: left;
  margin-left: 2%;
  width: 23%;
}
.notice_step > ul > li:first-child {
  float: left;
  margin-left: 2%;
  width: 23%;
}
.notice_step > ul > li span {
  position: relative;
  padding-bottom: 10px;
  color: #000;
  display: block;
  font-size: 22px;
  font-weight: bold;
  border-bottom: 1px solid #333;
}
.notice_step > ul > li span::after {
  content: "";
  position: absolute;
  right: 0;
  width: 5px;
  height: 5px;
  background: #333;
  bottom: -3px;
}
.notice_step > ul > li > ul {
  padding-left: 15px;
  margin-top: 15px;
}
.notice_step .step_txt li {
  font-size: 16px;
  list-style: square;
  margin-bottom: 5px !important;
}
.c_red {
  color: #e61b1b;
}

@media screen and (max-width: 768px) {
  .notice_step > ul > li {
    width: 45%;
    margin-left: 4%;
    height: 150px;
    margin-bottom: 20px !important;
  }
  .notice_step > ul > li:first-child {
    margin-left: 4%;
    width: 45%;
  }
}

@media screen and (max-width: 550px) {
  .notice_step > ul {
    padding: 32px;
  }
  .notice_step > ul > li {
    height: auto;
    width: 100%;
    margin-left: 0;
  }
  .notice_step > ul > li:first-child {
    width: 100%;
    margin-left: 0;
  }
}

@media screen and (max-width: 1600px) {
  #theme section.feature03 .img .over .desc {
    height: 48% !important;
    overflow-y: auto;
    margin-bottom: 20px;
  }
}

@media screen and (max-width: 1023px) {
  #branch section.branch_view .contact li {
    display: inline-block;
  }
  #branch section.branch_view .col {
    width: 100%;
    float: none;
  }
  #branch section.branch_view .img_area {
    padding-right: 0;
  }
  #branch section.branch_view .img_area .slider-for .item {
    max-height: 600px;
  }
  #branch section.branch_view .img_area .slider-nav .item {
    max-height: 200px;
  }

  #affiliated section.affiliated .row .col {
    width: 100%;
  }
  #affiliated section.affiliated .row .col:nth-child(1) {
    padding-left: 0;
  }

  #franchise section.feature03 .feature03_btm .bgt,
  #franchise section.feature03 .feature03_btm .bgb {
    width: 40%;
  }
  #franchise section.feature03 .feature03_btm .bgt img,
  #franchise section.feature03 .feature03_btm .bgb img {
    width: auto;
    max-width: 100%;
  }

  #affiliated section.affiliated .request_write .agree,
  #affiliated section.affiliated .request_write .btn,
  #affiliated section.affiliated .request_write .btn:last-child {
    width: 100%;
  }
  #affiliated section.affiliated .request_write .btn {
    margin-top: 10px;
  }
  #affiliated section.affiliated .request_write .agree label {
    left: 15%;
  }

  #theme section.feature03 .img .over .level {
    width: 100% !important;
  }
  #theme section.feature03 .img .over .desc {
    height: auto !important;
    max-height: 130px;
  }
  #theme section.feature03 .row .col:nth-child(4n-3) {
    clear: none;
  }
  #theme section.feature03 .row .col {
    width: 33.3%;
  }
}

@media screen and (max-width: 767px) {
  #header {
    background-color: #1a1a1a !important;
    padding-top: 0 !important;
  }
  #header .header_nav {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 0;
    overflow: auto;
  }
  #header .header_nav > ul > li {
    width: 100%;
    box-sizing: border-box;
    background-color: #272b2e;
    border-bottom: 1px solid #35393b;
    padding: 0;
  }
  #header .header_nav > ul > li.lang {
    display: none;
  }
  #header .header_nav > ul > li a {
    padding: 28px 20px;
  }
  #header .header_nav > ul > li > ul.depth2 {
    position: static;
    margin: 0;
    visibility: visible;
  }
  #header .header_nav > ul > li > ul > li {
    background-color: #191c1e;
    border-bottom: 1px solid #35393b;
    padding-left: 15px;
  }
  #header .header_nav > ul > li > ul > li a {
    padding: 20px;
    color: #b8b8b8;
  }
  #header .m_util {
    display: block;
  }

  #footer .footer_top .inner {
    padding: 0 5px;
  }
  #footer .footer_top ul {
    float: none;
  }
  #footer .footer_top ul li {
    width: 25%;
    text-align: center;
    box-sizing: border-box;
    padding: 0 5px;
  }
  #footer .footer_top .btn_top {
    position: fixed;
    bottom: 2%;
    right: 2%;
    background-color: #373737;
    z-index: 90;
    text-indent: -9999px;
  }
  #footer .footer_top .btn_top:after {
    content: "TOP";
    position: absolute;
    top: auto;
    left: 0;
    text-indent: 0;
    width: 100%;
  }
  #footer .footer_bottom .site_info {
    padding-left: 0;
    text-align: center;
  }
  #footer .footer_bottom .site_info .footer_logo {
    position: static;
    margin-bottom: 30px;
  }
  #footer .footer_bottom .site_info ul li {
    float: none;
    display: inline-block;
  }
  #footer .footer_bottom .bank_info {
    position: static;
    text-align: center;
    margin-bottom: 30px;
  }

  #main_intro .intro_logo img {
    max-width: 75%;
  }
  #main_propos .tit_top .feature_desc br {
    display: none;
  }
  #main_propos .tit_bottom .feature_desc br {
    display: none;
  }
  #main_propos .tit_bottom .feature_title {
    font-size: 2.2em;
    line-height: 50px;
  }
  #main_media {
    background-color: #fff;
    background: none;
    height: auto !important;
  }
  #main_media .row.desc .txt {
    padding-left: 10px;
  }
  #main_media .row.stats .col .stat {
    font-size: 80px;
  }
  #main_guide {
    height: auto !important;
  }
  #main_guide .row .col {
    width: 100%;
    margin-bottom: 10%;
  }
  #main_different {
    height: auto !important;
  }
  #main_different .feature_desc p br {
    display: none;
  }
  #main_different .row .col {
    width: 50%;
    margin-bottom: 10%;
  }
  #main_stats .row .col {
    width: 50%;
    margin-bottom: 10%;
  }

  #theme section.feature01 .row .col {
    width: 100%;
    max-width: 560px;
    margin: 0 auto;
    float: none;
    margin-bottom: 60px;
  }
  #theme section.feature01 .tit {
    margin-bottom: 25px;
  }
  #theme section.feature02 .row .col {
    width: 50%;
  }
  #theme section.feature03 .row .col {
    width: 50%;
  }
  #theme section.feature03 .row .col:nth-child(2n-1) {
    clear: both;
  }
  #theme section.feature03 .img .over .level span {
    width: 100%;
  }
  #theme section.feature03 .img .over .inner {
    padding: 10%;
  }

  #branch section.branch_list .row .col {
    padding: 2%;
    width: 49%;
  }

  #board section.board_list #board_top .board_info {
    position: static;
  }
  #board section.board_list #board_top .board_search {
    max-width: 100%;
  }
  #board section.board_list #board_tab ul li {
    width: 25%;
  }
  #board section.board_list #board_tab ul li a {
    padding: 0 5%;
    text-align: center;
  }

  #franchise section.feature01 .contact li {
    display: inline-block;
    width: 100%;
  }
  #franchise section.feature03 .feature03_btm .container {
    padding: 40px 0 80px;
  }
  #franchise section.feature03 .width_box td {
    height: 100px;
    font-size: 28px;
    line-height: 28px;
    word-break: keep-all;
  }
  #franchise section.feature03 .feature03_btm .txt .t_txt {
    margin: 20px 0;
  }
  #franchise section.feature03 .col {
    width: 100%;
  }
  #franchise section.feature03 h1 {
    margin-bottom: 30px;
    text-align: left;
  }
  #franchise section.feature03 h1 br {
    display: none;
  }
  #franchise section.feature03 .color_box {
    margin-bottom: 30px;
    font-size: 30px;
  }
  #franchise section.feature03 .color_box p {
    padding: 10px;
  }
  #franchise section.feature03 ul {
    padding-left: 0;
  }
  #franchise section.feature03 .feature03_btm .img .vw_pc {
    display: none;
  }
  #franchise section.feature03 .feature03_btm .img .vw_mo {
    display: block;
    width: 100%;
    max-width: 720px;
  }
  #franchise section.feature04 .tit td {
    height: 100px;
    font-size: 28px;
  }
  #franchise section.feature04 .col {
    width: 50%;
    padding: 20px 3%;
  }

  #reservation section.res_list .col {
    width: 25%;
  }
  #reservation .write_form table th {
    width: 100px;
  }

  #reservation #title_area .selectArea {
  }
  #reservation #title_area .selectArea select {
    display: block;
    margin: 0 auto 10px;
  }
  #reservation #title_area .selectArea .datepicker {
    width: 100%;
    display: block;
    margin: 0 auto;
  }
  #reservation #title_area .selectArea .datepicker .ipt {
    width: 100%;
  }

  #board section.board_list #board_list thead {
    display: none;
  }
  #board section.board_list #board_list tr {
    border-bottom: 1px solid #d4d4d4;
    position: relative;
  }
  #board section.board_list #board_list td {
    display: inline-block;
    width: 100%;
    border: 0;
    height: auto;
    text-align: left;
  }
  #board section.board_list #board_list .num,
  #board section.board_list #board_list .view {
    display: none;
  }
  #board section.board_list #board_list .title {
  }
  #board section.board_list #board_list .name {
    width: 50%;
  }
  #board section.board_list #board_list .date {
    width: 50%;
    text-align: right;
  }
  #board section.board_list #board_list .date.left {
    text-align: left;
  }
  #board section.board_list #board_list .end {
    color: #999;
  }
  #board section.board_list #board_list .state {
    width: 50%;
    text-align: right;
  }
  #theme section.feature03 .img .over .desc {
    max-height: none;
  }
}

@media screen and (max-width: 639px) {
  #footer .footer_top ul li {
    width: auto;
  }
  #theme section.feature03 .img .over .desc {
    max-height: 130px !important;
  }
}

@media screen and (max-width: 520px) {
  #theme section.feature03 .opt {
    padding-right: 0;
  }
  #theme section.feature03 .opt button {
    width: 100%;
    position: static;
    margin-top: 5px;
  }
  #reservation section.res_list .col {
    width: 33.333%;
  }

  #franchise h2.tilte {
    letter-spacing: -0.5px;
    font-size: 22px;
  }
  #franchise section.feature04 .title li {
    display: inline-block;
    width: 100%;
    height: auto;
  }
  #franchise section.feature04 .title li:nth-child(1) {
    margin-bottom: 5px;
    font-size: 20px;
  }
  #franchise section.feature04 .desc {
    font-size: 15px;
  }

  #reservation .btn_group .btn {
    width: 49%;
    max-width: 100%;
  }
  #theme section.feature03 .row .col {
    width: 100%;
  }
  #theme section.feature03 .img .over .desc {
    height: auto !important;
    max-height: none !important;
    margin-bottom: 30px;
  }
}

@media screen and (max-width: 399px) {
  .container {
    padding: 0 20px;
  }
  #header .header_logo {
    width: 100px;
    margin: 10px;
  }
  #main > section > .container > .middle {
    padding: 70px 0;
  }
  #footer .footer_top ul li {
    padding: 0 7px;
    width: auto;
  }
}

@media screen and (max-width: 360px) {
}
