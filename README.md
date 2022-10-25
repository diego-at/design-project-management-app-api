<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title>Design Project Management Dashboard</title><style>
/* cspell:disable-file */
/* webkit printing magic: print all background colors */
html {
	-webkit-print-color-adjust: exact;
}
* {
	box-sizing: border-box;
	-webkit-print-color-adjust: exact;
}

html,
body {
	margin: 0;
	padding: 0;
}
@media only screen {
	body {
		margin: 2em auto;
		max-width: 900px;
		color: rgb(55, 53, 47);
	}
}

body {
	line-height: 1.5;
	white-space: pre-wrap;
}

a,
a.visited {
	color: inherit;
	text-decoration: underline;
}

.pdf-relative-link-path {
	font-size: 80%;
	color: #444;
}

h1,
h2,
h3 {
	letter-spacing: -0.01em;
	line-height: 1.2;
	font-weight: 600;
	margin-bottom: 0;
}

.page-title {
	font-size: 2.5rem;
	font-weight: 700;
	margin-top: 0;
	margin-bottom: 0.75em;
}

h1 {
	font-size: 1.875rem;
	margin-top: 1.875rem;
}

h2 {
	font-size: 1.5rem;
	margin-top: 1.5rem;
}

h3 {
	font-size: 1.25rem;
	margin-top: 1.25rem;
}

.source {
	border: 1px solid #ddd;
	border-radius: 3px;
	padding: 1.5em;
	word-break: break-all;
}

.callout {
	border-radius: 3px;
	padding: 1rem;
}

figure {
	margin: 1.25em 0;
	page-break-inside: avoid;
}

figcaption {
	opacity: 0.5;
	font-size: 85%;
	margin-top: 0.5em;
}

mark {
	background-color: transparent;
}

.indented {
	padding-left: 1.5em;
}

hr {
	background: transparent;
	display: block;
	width: 100%;
	height: 1px;
	visibility: visible;
	border: none;
	border-bottom: 1px solid rgba(55, 53, 47, 0.09);
}

img {
	max-width: 100%;
}

@media only print {
	img {
		max-height: 100vh;
		object-fit: contain;
	}
}

@page {
	margin: 1in;
}

.collection-content {
	font-size: 0.875rem;
}

.column-list {
	display: flex;
	justify-content: space-between;
}

.column {
	padding: 0 1em;
}

.column:first-child {
	padding-left: 0;
}

.column:last-child {
	padding-right: 0;
}

.table_of_contents-item {
	display: block;
	font-size: 0.875rem;
	line-height: 1.3;
	padding: 0.125rem;
}

.table_of_contents-indent-1 {
	margin-left: 1.5rem;
}

.table_of_contents-indent-2 {
	margin-left: 3rem;
}

.table_of_contents-indent-3 {
	margin-left: 4.5rem;
}

.table_of_contents-link {
	text-decoration: none;
	opacity: 0.7;
	border-bottom: 1px solid rgba(55, 53, 47, 0.18);
}

table,
th,
td {
	border: 1px solid rgba(55, 53, 47, 0.09);
	border-collapse: collapse;
}

table {
	border-left: none;
	border-right: none;
}

th,
td {
	font-weight: normal;
	padding: 0.25em 0.5em;
	line-height: 1.5;
	min-height: 1.5em;
	text-align: left;
}

th {
	color: rgba(55, 53, 47, 0.6);
}

ol,
ul {
	margin: 0;
	margin-block-start: 0.6em;
	margin-block-end: 0.6em;
}

li > ol:first-child,
li > ul:first-child {
	margin-block-start: 0.6em;
}

ul > li {
	list-style: disc;
}

ul.to-do-list {
	text-indent: -1.7em;
}

ul.to-do-list > li {
	list-style: none;
}

.to-do-children-checked {
	text-decoration: line-through;
	opacity: 0.375;
}

ul.toggle > li {
	list-style: none;
}

ul {
	padding-inline-start: 1.7em;
}

ul > li {
	padding-left: 0.1em;
}

ol {
	padding-inline-start: 1.6em;
}

ol > li {
	padding-left: 0.2em;
}

.mono ol {
	padding-inline-start: 2em;
}

.mono ol > li {
	text-indent: -0.4em;
}

.toggle {
	padding-inline-start: 0em;
	list-style-type: none;
}

/* Indent toggle children */
.toggle > li > details {
	padding-left: 1.7em;
}

.toggle > li > details > summary {
	margin-left: -1.1em;
}

.selected-value {
	display: inline-block;
	padding: 0 0.5em;
	background: rgba(206, 205, 202, 0.5);
	border-radius: 3px;
	margin-right: 0.5em;
	margin-top: 0.3em;
	margin-bottom: 0.3em;
	white-space: nowrap;
}

.collection-title {
	display: inline-block;
	margin-right: 1em;
}

.simple-table {
	margin-top: 1em;
	font-size: 0.875rem;
	empty-cells: show;
}
.simple-table td {
	height: 29px;
	min-width: 120px;
}

.simple-table th {
	height: 29px;
	min-width: 120px;
}

.simple-table-header-color {
	background: rgb(247, 246, 243);
	color: black;
}
.simple-table-header {
	font-weight: 500;
}

time {
	opacity: 0.5;
}

.icon {
	display: inline-block;
	max-width: 1.2em;
	max-height: 1.2em;
	text-decoration: none;
	vertical-align: text-bottom;
	margin-right: 0.5em;
}

img.icon {
	border-radius: 3px;
}

.user-icon {
	width: 1.5em;
	height: 1.5em;
	border-radius: 100%;
	margin-right: 0.5rem;
}

.user-icon-inner {
	font-size: 0.8em;
}

.text-icon {
	border: 1px solid #000;
	text-align: center;
}

.page-cover-image {
	display: block;
	object-fit: cover;
	width: 100%;
	max-height: 30vh;
}

.page-header-icon {
	font-size: 3rem;
	margin-bottom: 1rem;
}

.page-header-icon-with-cover {
	margin-top: -0.72em;
	margin-left: 0.07em;
}

.page-header-icon img {
	border-radius: 3px;
}

.link-to-page {
	margin: 1em 0;
	padding: 0;
	border: none;
	font-weight: 500;
}

p > .user {
	opacity: 0.5;
}

td > .user,
td > time {
	white-space: nowrap;
}

input[type="checkbox"] {
	transform: scale(1.5);
	margin-right: 0.6em;
	vertical-align: middle;
}

p {
	margin-top: 0.5em;
	margin-bottom: 0.5em;
}

.image {
	border: none;
	margin: 1.5em 0;
	padding: 0;
	border-radius: 0;
	text-align: center;
}

.code,
code {
	background: rgba(135, 131, 120, 0.15);
	border-radius: 3px;
	padding: 0.2em 0.4em;
	border-radius: 3px;
	font-size: 85%;
	tab-size: 2;
}

code {
	color: #eb5757;
}

.code {
	padding: 1.5em 1em;
}

.code-wrap {
	white-space: pre-wrap;
	word-break: break-all;
}

.code > code {
	background: none;
	padding: 0;
	font-size: 100%;
	color: inherit;
}

blockquote {
	font-size: 1.25em;
	margin: 1em 0;
	padding-left: 1em;
	border-left: 3px solid rgb(55, 53, 47);
}

.bookmark {
	text-decoration: none;
	max-height: 8em;
	padding: 0;
	display: flex;
	width: 100%;
	align-items: stretch;
}

.bookmark-title {
	font-size: 0.85em;
	overflow: hidden;
	text-overflow: ellipsis;
	height: 1.75em;
	white-space: nowrap;
}

.bookmark-text {
	display: flex;
	flex-direction: column;
}

.bookmark-info {
	flex: 4 1 180px;
	padding: 12px 14px 14px;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.bookmark-image {
	width: 33%;
	flex: 1 1 180px;
	display: block;
	position: relative;
	object-fit: cover;
	border-radius: 1px;
}

.bookmark-description {
	color: rgba(55, 53, 47, 0.6);
	font-size: 0.75em;
	overflow: hidden;
	max-height: 4.5em;
	word-break: break-word;
}

.bookmark-href {
	font-size: 0.75em;
	margin-top: 0.25em;
}

.sans { font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
.code { font-family: "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace; }
.serif { font-family: Lyon-Text, Georgia, ui-serif, serif; }
.mono { font-family: iawriter-mono, Nitti, Menlo, Courier, monospace; }
.pdf .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK JP'; }
.pdf:lang(zh-CN) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC'; }
.pdf:lang(zh-TW) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK TC'; }
.pdf:lang(ko-KR) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK KR'; }
.pdf .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.pdf .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK JP'; }
.pdf:lang(zh-CN) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK SC'; }
.pdf:lang(zh-TW) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK TC'; }
.pdf:lang(ko-KR) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK KR'; }
.pdf .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.highlight-default {
	color: rgba(55, 53, 47, 1);
}
.highlight-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.highlight-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.highlight-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.highlight-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.highlight-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.highlight-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.highlight-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.highlight-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.highlight-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.highlight-gray_background {
	background: rgba(241, 241, 239, 1);
}
.highlight-brown_background {
	background: rgba(244, 238, 238, 1);
}
.highlight-orange_background {
	background: rgba(251, 236, 221, 1);
}
.highlight-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.highlight-teal_background {
	background: rgba(237, 243, 236, 1);
}
.highlight-blue_background {
	background: rgba(231, 243, 248, 1);
}
.highlight-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.highlight-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.highlight-red_background {
	background: rgba(253, 235, 236, 1);
}
.block-color-default {
	color: inherit;
	fill: inherit;
}
.block-color-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.block-color-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.block-color-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.block-color-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.block-color-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.block-color-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.block-color-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.block-color-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.block-color-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.block-color-gray_background {
	background: rgba(241, 241, 239, 1);
}
.block-color-brown_background {
	background: rgba(244, 238, 238, 1);
}
.block-color-orange_background {
	background: rgba(251, 236, 221, 1);
}
.block-color-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.block-color-teal_background {
	background: rgba(237, 243, 236, 1);
}
.block-color-blue_background {
	background: rgba(231, 243, 248, 1);
}
.block-color-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.block-color-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.block-color-red_background {
	background: rgba(253, 235, 236, 1);
}
.select-value-color-pink { background-color: rgba(245, 224, 233, 1); }
.select-value-color-purple { background-color: rgba(232, 222, 238, 1); }
.select-value-color-green { background-color: rgba(219, 237, 219, 1); }
.select-value-color-gray { background-color: rgba(227, 226, 224, 1); }
.select-value-color-opaquegray { background-color: rgba(255, 255, 255, 0.0375); }
.select-value-color-orange { background-color: rgba(250, 222, 201, 1); }
.select-value-color-brown { background-color: rgba(238, 224, 218, 1); }
.select-value-color-red { background-color: rgba(255, 226, 221, 1); }
.select-value-color-yellow { background-color: rgba(253, 236, 200, 1); }
.select-value-color-blue { background-color: rgba(211, 229, 239, 1); }

.checkbox {
	display: inline-flex;
	vertical-align: text-bottom;
	width: 16;
	height: 16;
	background-size: 16px;
	margin-left: 2px;
	margin-right: 5px;
}

.checkbox-on {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%2358A9D7%22%2F%3E%0A%3Cpath%20d%3D%22M6.71429%2012.2852L14%204.9995L12.7143%203.71436L6.71429%209.71378L3.28571%206.2831L2%207.57092L6.71429%2012.2852Z%22%20fill%3D%22white%22%2F%3E%0A%3C%2Fsvg%3E");
}

.checkbox-off {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%220.75%22%20y%3D%220.75%22%20width%3D%2214.5%22%20height%3D%2214.5%22%20fill%3D%22white%22%20stroke%3D%22%2336352F%22%20stroke-width%3D%221.5%22%2F%3E%0A%3C%2Fsvg%3E");
}
	
</style></head><body><article id="93251b00-7079-4bf0-af66-62acac22be3a" class="page sans"><header><h1 class="page-title">Design Project Management Dashboard</h1></header><div class="page-body"><p id="5490befd-8c13-452e-a04c-6f7df375fa2f" class="">This article details the process of building a project management system for designers from start to finish.</p><nav id="2f1a4305-0405-43cb-8244-bff3654dff35" class="block-color-gray table_of_contents"><div class="table_of_contents-item table_of_contents-indent-0"><a class="table_of_contents-link" href="#02577274-0fc0-44b6-97d9-bb408da32c84">The issue with designing projects</a></div><div class="table_of_contents-item table_of_contents-indent-0"><a class="table_of_contents-link" href="#b4fcf720-46a8-4080-b544-fbadcdf11718">Our custom project management system for design projects </a></div><div class="table_of_contents-item table_of_contents-indent-0"><a class="table_of_contents-link" href="#fcc106ee-1120-4051-9efa-566147a4006a">Let’s build the backend of our app </a></div><div class="table_of_contents-item table_of_contents-indent-1"><a class="table_of_contents-link" href="#86f10184-772b-45a7-afb2-c498da6287f4">Project set up </a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#07bb906d-9af1-4de0-bcf9-e9de4a0546ed">Creating a repository </a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#d33dbc18-131d-4a73-b7ac-11558f5f9393">Creating a Laravel project</a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#2659554f-c1f3-48ba-a5d5-14f6ec739f14">Setting up a local database</a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#8280117e-f4a5-444a-b420-e57155e44095">Add git to the project and make our first commit</a></div><div class="table_of_contents-item table_of_contents-indent-1"><a class="table_of_contents-link" href="#edcef636-5354-4a19-a249-9bac4248f1c8">Creating our API</a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#7e72a334-f704-44e0-8d92-082e5181074c">API design</a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#b7677696-3f56-42e5-b35f-43f86482eb4f">Model creation</a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#2523f6e3-ee45-4a2b-9552-241af0ce48fb">Database migration</a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#0900d08e-93a5-4d8d-b015-f78618cd4b87">Defining our resources </a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#38da28d2-568a-460f-a849-2f33a7964175">Creating controllers</a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#9738192e-fc80-4210-ae92-8a0da7f7a7b6">Defining our routes</a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#87f59087-a56b-4e0d-b41c-fbc15ec43f24">Testing our endpoints </a></div><div class="table_of_contents-item table_of_contents-indent-2"><a class="table_of_contents-link" href="#bf73e171-4a52-4839-bb76-606f59886f29">Authentication</a></div></nav><h2 id="02577274-0fc0-44b6-97d9-bb408da32c84" class="">The issue with designing projects</h2><p id="6b952921-480c-43d9-b72f-12c7e492ab66" class="">Managing a design project is always painful and complicated.</p><p id="3e77090a-79de-4461-a9f0-f1f74fe35a57" class="">Here are some common issues all designers encounter : </p><ul id="15316915-5c68-4270-bdb5-33d58acbb589" class="bulleted-list"><li style="list-style-type:disc">Getting feedback from clients</li></ul><ul id="1785cb51-c740-4a5f-aad1-7b117be862ea" class="bulleted-list"><li style="list-style-type:disc">Making sure the client understands the design steps </li></ul><ul id="20026b6d-02ac-4a7c-81fb-db543a97b6f5" class="bulleted-list"><li style="list-style-type:disc">Loosing time exchanging email with clients to get there feedback </li></ul><ul id="73673af3-92bf-427e-897a-a0c071a6b23f" class="bulleted-list"><li style="list-style-type:disc">A client asking for too many changes </li></ul><ul id="c046e7b4-acd1-41c0-bf46-d575c7610f8d" class="bulleted-list"><li style="list-style-type:disc">Bad project specifications leading to customer dissatisfaction</li></ul><p id="8f8d4b4c-42f5-4804-829b-25e6af0c3f86" class="">
</p><p id="da26cb5a-938d-404e-8290-91271b93ba07" class="">The standard way to solve this is to have a project management software like asana or clickup…</p><p id="942d75a7-ce45-42aa-ad67-bd34b93c519b" class="">And on top of that at a visual feedback tool like <a href="https://markup.io/">markup.io</a>.</p><p id="1a87879c-7856-45f7-8e33-9e1a97ce3d54" class="">
</p><figure id="ec7bb077-c6e7-46ce-99ef-4f23b0dd7f8c" class="image"><a href="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled.png"><img style="width:1104px" src="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled.png"/></a></figure><p id="ca898bca-e440-48f7-a4a8-4dc2406074f2" class="">
</p><p id="27329359-6371-47b9-9556-84d6dea982d9" class="">But this solution is not perfect.

Some clients get confused with the 2 websites, forget there names or link to it. Don’t understand how to leave feedback. Sometimes, Asana’s (or any other project management tool) interface will be too confusing for them.</p><p id="06a4e586-ca2c-44f7-90bc-a80539fdc515" class="">
</p><h2 id="b4fcf720-46a8-4080-b544-fbadcdf11718" class="">Our custom project management system for design projects </h2><p id="2e54ce5c-2775-4db5-b15d-12e8a506049b" class="">To solve those issues we will create a project management system specifically made for designers and there clients.</p><p id="bd81393a-eeea-4604-9bdd-9afa13de0b1a" class="">
</p><p id="a6e554c1-1194-4e42-b9a9-ff8e09badd08" class=""><strong>Our app will allow the client to follow project development and leave feedback at every step with a visual feedback tool.</strong></p><p id="b7aa0179-da7d-4e88-bc5c-f1939c377219" class="">
</p><p id="170e8abd-cb4b-4dd8-a150-597d0659b073" class="">In order to do that, we need : </p><ul id="3b81bcdd-4b37-4bd9-b6b3-62c0b535f900" class="bulleted-list"><li style="list-style-type:disc">A dashboard for the designer </li></ul><ul id="b025ef24-0a95-4c68-baf6-53a358d3638d" class="bulleted-list"><li style="list-style-type:disc">A dashboard for the client </li></ul><ul id="e3ad1ef7-4dc8-400b-87e3-9cc63eec767c" class="bulleted-list"><li style="list-style-type:disc">A visual feedback tool</li></ul><p id="20e7a93c-d87d-4c4a-b8cb-b7342a98fa6c" class="">
</p><p id="cedb1131-93a9-4ffa-9883-446dd4664e62" class="">Here are the features we will be building.</p><p id="b613fe76-613a-4670-95cc-dc93de86ffb0" class="">
</p><p id="394e0d8b-fa07-4ec4-91f6-b32511e5753a" class="">Features for the designer dashboard :</p><ul id="8f82647c-f04d-4f72-be68-5da3825ae353" class="bulleted-list"><li style="list-style-type:disc">Create a new project <ul id="6a92ac49-152a-49c4-bb36-c2b00df66a49" class="bulleted-list"><li style="list-style-type:circle">Set a related client </li></ul><ul id="42d93168-53e4-4353-b143-ff0cff1ec3f6" class="bulleted-list"><li style="list-style-type:circle">Set a title, description and due date</li></ul><ul id="65bfb3e8-4933-47be-b0b1-7b3bdc3c428f" class="bulleted-list"><li style="list-style-type:circle">Set a number of revision rounds </li></ul><ul id="c99a2f60-159f-4260-ae25-b438df268a7b" class="bulleted-list"><li style="list-style-type:circle">Set a maximum number of annotations for each revision round</li></ul></li></ul><ul id="5a29a3d2-4609-424c-adbe-27ac9460e393" class="bulleted-list"><li style="list-style-type:disc">Upload an image for review<ul id="41ca4483-235f-4c59-a81e-eb3ccd8b17b1" class="bulleted-list"><li style="list-style-type:circle">Ask the client for feedback </li></ul><ul id="b08d094c-5ebd-467b-b43d-4f942822a5c9" class="bulleted-list"><li style="list-style-type:circle">See the client feedback</li></ul></li></ul><ul id="04118c65-fc00-42ba-9314-4901977255e2" class="bulleted-list"><li style="list-style-type:disc">Set / update profile informations<ul id="7161def2-4a9f-44bb-8115-9daef960a60f" class="bulleted-list"><li style="list-style-type:circle">Email </li></ul><ul id="f562b3de-2df2-4db3-b0be-a7b0f001fc63" class="bulleted-list"><li style="list-style-type:circle">Password </li></ul><ul id="a0977268-2a36-4958-9bb5-770d28554cb9" class="bulleted-list"><li style="list-style-type:circle">Name</li></ul></li></ul><p id="440482da-2304-489a-9d6f-6691c12e1c03" class="">
</p><p id="f02f3cd5-17c9-4414-849c-d41d35b6ae85" class="">Features for the client dashboard :</p><ul id="cb6e0954-6184-4275-b02b-7f6f19402d92" class="bulleted-list"><li style="list-style-type:disc">See project milestones and current step</li></ul><ul id="eba6c9f1-688a-4726-973b-b6710da29425" class="bulleted-list"><li style="list-style-type:disc">Give feedback with the annotation tool</li></ul><p id="73cbdc14-f346-4daf-b1f0-9084571ce68b" class="">
</p><p id="aafa2fa7-7a2a-41ca-a136-e9583c7e8a1d" class="">Features for the visual feedback tool : </p><ul id="2a2b306d-c91b-4252-9d0d-a979cc7449a4" class="bulleted-list"><li style="list-style-type:disc">Annotate an image </li></ul><ul id="a1f2971e-e24d-4ef4-8e25-188076179047" class="bulleted-list"><li style="list-style-type:disc">See the list of annotations </li></ul><ul id="6445aa79-81cb-4446-96d7-c5664d3eaecc" class="bulleted-list"><li style="list-style-type:disc">Save annotations</li></ul><p id="4e96cbd8-fd0e-4a6a-b614-5320a3e15415" class="">
</p><p id="bf1bf979-d15c-4f7e-8e91-3475db42ed50" class="">The technologies we will be using :</p><ul id="28dfe0b6-b806-4a6b-bf26-c360d82866a7" class="bulleted-list"><li style="list-style-type:disc">Laravel for the API</li></ul><ul id="5c99cefa-391f-4a59-b65b-5c7b9e2708fd" class="bulleted-list"><li style="list-style-type:disc">MySQL for the database</li></ul><ul id="9b9f8c09-c6ce-45e5-862c-9f6163be56e9" class="bulleted-list"><li style="list-style-type:disc">React for the frontend</li></ul><p id="0b232abc-1a73-4330-ae82-7c41bbb3f88a" class="">
</p><h1 id="fcc106ee-1120-4051-9efa-566147a4006a" class="">Let’s build the backend of our app </h1><h2 id="86f10184-772b-45a7-afb2-c498da6287f4" class="">Project set up </h2><p id="f05d3472-a6f1-415c-a460-0ca563d00d8b" class="">
</p><h3 id="07bb906d-9af1-4de0-bcf9-e9de4a0546ed" class="">Creating a repository </h3><p id="e8fbae50-e9b6-4157-8673-0e61252bdbc9" class="">In order to save our project and share it, we will create a repository on github :</p><figure id="10145ccf-eb04-41b5-bc01-47d55b1217b1" class="image"><a href="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%201.png"><img style="width:677px" src="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%201.png"/></a></figure><p id="7f88aba3-4a94-432a-99bc-a9e3ca4ab85c" class="">
</p><p id="8ddb7687-7378-43a1-90f5-ffc3506f5dde" class="">Let’s now clone the repository : </p><pre id="92e5a4ef-60bc-45fb-b7e8-e1f0efbce59f" class="code"><code>git clone https://github.com/diego-at/design-project-management-app-api.git</code></pre><p id="e39eb470-b5af-4fde-93dc-aecebef5d307" class="">
</p><h3 id="d33dbc18-131d-4a73-b7ac-11558f5f9393" class="">Creating a Laravel project</h3><p id="ef32dd8f-db27-46b8-b818-9e88efe768e7" class="">Now that we have our repository, we need to create a new Laravel Project : </p><pre id="70127dc7-f2ea-4348-8b47-f0259129522d" class="code"><code>composer create-project laravel/laravel design-project-management-app-api</code></pre><p id="965ccd09-91e3-4d73-b237-0dc37ce31e2f" class="">
</p><p id="58f09e27-c8d5-4306-b80a-0d42345fc17f" class="">Then navigate in the new folder containing ou project :</p><pre id="249bb257-70f6-4985-a851-94f79bfe4509" class="code"><code>cd design-project-management-app-api</code></pre><p id="d2c7d1e1-ec2c-48d5-960e-83c65eaae968" class="">
</p><p id="02eabc35-5765-4fbd-9c04-235f0796ac1c" class="">And start our development server provided by php artisan :</p><pre id="de0eca53-4ee0-4a24-a1b0-9da0fb58bc10" class="code"><code>php artisan serve</code></pre><p id="49dc6d6f-3bf0-442c-94bb-6f93cc214bb6" class="">
</p><p id="5ad30638-6ab8-4a25-88a2-9ac1e3ff4bd4" class="">We can now navigate to <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000</a> and see a welcome page.</p><figure id="b3c35dbb-41ed-4267-affc-b139b43f36c4" class="image"><a href="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%202.png"><img style="width:1604px" src="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%202.png"/></a></figure><p id="f6de64f6-f1a1-4285-a69d-25b2808c3543" class="">
</p><h3 id="2659554f-c1f3-48ba-a5d5-14f6ec739f14" class="">Setting up a local database</h3><p id="729df38a-ad86-479b-a76e-da879ec96631" class="">We need a local database to store our users data.
</p><p id="444e04f1-e7e9-419c-a694-f470fb08b2d1" class="">We will be using a simple MySQL database with XAMPP</p><figure id="8e503a22-64a3-435d-9484-c597ac529f62" class="image"><a href="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%203.png"><img style="width:666px" src="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%203.png"/></a></figure><p id="e84d7138-1b76-4260-83b2-60f883464715" class="">
</p><p id="f87ed520-3936-440d-9a16-27bcae043e02" class="">Now let’s update our <mark class="highlight-blue">.env</mark> file to link our app with our local database : </p><pre id="55a40c61-29a8-4562-a826-6f33d167d256" class="code"><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=design_poject_management
DB_USERNAME=root
DB_PASSWORD=</code></pre><p id="cfb8f301-0432-4c3e-96b3-2bb49667b70f" class="">
</p><p id="1530fe32-107f-455f-8995-c8a961e5b629" class="">We can now run our database migrations to create the design_project_management database and default tables that come with the default package Sanctum (more on that later).</p><pre id="c67c9354-9837-4f54-a725-1e782479dec7" class="code"><code>php artisan migrate</code></pre><p id="aaf863cb-b495-436b-b8ff-94578876ebf8" class="">
</p><p id="4dcc270c-1a36-4b9c-8fbb-0bdd708e9283" class="">You we now have the following tables in our database : </p><figure id="2edf5d60-9059-4fb0-8f3a-a0b4eb78c0c8" class="image"><a href="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%204.png"><img style="width:217px" src="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%204.png"/></a></figure><p id="735b503b-6f9d-40e1-8cf1-9055946293e7" class="">
</p><h3 id="8280117e-f4a5-444a-b420-e57155e44095" class="">Add git to the project and make our first commit</h3><p id="dfcc9956-4048-4925-aa0f-06768c6c8e6e" class="">
</p><p id="7b262812-9eb7-4895-a7ed-0b72e7a4d2db" class="">Let’s add git to our project :</p><pre id="19426475-94ac-4277-9e5f-b57735036eeb" class="code"><code>git init</code></pre><p id="aa8ff498-1a73-4587-9833-21e7c56008bc" class="">
</p><p id="b13d5412-d8ca-4ce5-b5ab-95b7dc6c22ed" class="">connect to the repository :</p><pre id="1cacfadb-76a7-488c-918b-7aee8d6e1ab6" class="code"><code>git remote add origin git@github.com:diego-at/design-project-management-app-api.git</code></pre><p id="5e25d70f-aeda-4023-b02f-b5616b43f99e" class="">
</p><p id="aa931e7c-f9e5-4b6f-ab07-b284421e0e38" class="">Add all our files, make our first commit, make sure we are in the main branch and push our files to the repository :</p><pre id="167a31d1-8d24-4dfb-aba5-38f887b87921" class="code"><code>git add --all
git commit --m &quot;Initial commit&quot;
git branch -M main
git push -u origin main</code></pre><p id="516ce97e-7d71-421c-bb89-d621705f7595" class="">
</p><p id="a7a41e96-2ead-40eb-84ba-85693d270c46" class="">Note that our <mark class="highlight-blue">.env </mark>file<mark class="highlight-blue"> </mark>that will not be pushed to our repository as it would be a huge security issue. </p><p id="b6814611-9d8a-46f3-abfc-8e4163b7271a" class="">This is thanks to the<mark class="highlight-blue"> .gitignore</mark> file.</p><p id="4bf470d7-2a7f-4d34-9696-2b4b48751475" class="">
</p><p id="2f47297d-a082-4bdf-aeef-a1724c730c8a" class="">Everything is ready, let’s get down to business.</p><p id="ad9085f6-8963-46ca-a912-7f5f5b90e1ff" class="">
</p><p id="354c2dc5-dbf7-4e2e-9e79-48bae559ef05" class="">
</p><p id="e8467fe5-b8d3-4076-a5da-3b5a9fa8f3f2" class="">
</p><p id="6f3b0378-68d7-47e7-be9d-fd544b16134c" class="">
</p><h2 id="edcef636-5354-4a19-a249-9bac4248f1c8" class="">Creating our API</h2><p id="0e75547e-9915-4bc3-8d9b-619fac05ce9f" class="">
</p><h3 id="7e72a334-f704-44e0-8d92-082e5181074c" class="">API design</h3><p id="c1b49907-ddf7-4d92-83b3-c8bc2796014e" class="">
</p><p id="92e36a0a-2e63-4a02-a4ea-6b1d0ed9ab43" class="">We will use modern web development standards and serve our content through an API. 
</p><p id="2a490818-d789-4538-a37c-86c97c575833" class="">Before everything else, we need to think about our database schema.</p><p id="61cf9d43-4542-4338-85e8-a5c12ab20646" class="">
</p><p id="dbda86f7-c565-4c3d-8340-8fea27cbf736" class="">1) Users </p><ul id="793e15b4-1c74-4c29-a0d1-2ee581cbb0ec" class="bulleted-list"><li style="list-style-type:disc">role: <ul id="e81e194a-dd82-4cee-bee5-9294e2c256c2" class="bulleted-list"><li style="list-style-type:circle">designer</li></ul><ul id="ede593a4-afee-45f8-9d4c-e37ff8f49814" class="bulleted-list"><li style="list-style-type:circle">client</li></ul><ul id="97ad7cc6-c2fe-4771-82f3-04928a17bb06" class="bulleted-list"><li style="list-style-type:circle">administrator </li></ul></li></ul><ul id="fb0ad607-15f6-4146-9446-b972852d1c1a" class="bulleted-list"><li style="list-style-type:disc">name</li></ul><ul id="7d52639a-d90b-4e5a-af2b-b8dade82cf9e" class="bulleted-list"><li style="list-style-type:disc">email</li></ul><ul id="39e738aa-f26e-43d3-9206-4afbef5ce991" class="bulleted-list"><li style="list-style-type:disc">password</li></ul><p id="d8019bbe-67f7-46d0-b19f-83cd77d28153" class="">
</p><p id="4280a60a-aa64-490a-ac21-c4e7005ed360" class="">2) Companies</p><ul id="3ad8c8f3-b20d-4583-8d88-a50f2b318183" class="bulleted-list"><li style="list-style-type:disc">name</li></ul><ul id="b5d2e0c2-0407-4946-9ac7-34fd7b4b3921" class="bulleted-list"><li style="list-style-type:disc">type<ul id="b6e39524-a80f-461e-8e19-7955673d899f" class="bulleted-list"><li style="list-style-type:circle">design_company  </li></ul><ul id="57fdef8c-e8c1-47fa-8001-250642f2e79d" class="bulleted-list"><li style="list-style-type:circle">client_company</li></ul></li></ul><p id="20a69069-fbf7-462c-a039-78b04f463158" class="">
</p><p id="6907073a-dc73-4e2c-af9d-7b9c01c84e84" class="">3) Projects</p><ul id="2bde990e-f63d-465c-b3e6-656e29bf9c2c" class="bulleted-list"><li style="list-style-type:disc">name</li></ul><ul id="3978eab1-a37c-4aac-b3ea-0e3128adc37a" class="bulleted-list"><li style="list-style-type:disc">revisions_rounds</li></ul><ul id="382e65be-2c5d-4d43-a90e-e48b4000829d" class="bulleted-list"><li style="list-style-type:disc">status <ul id="2bb636a5-dbc0-42a1-9cab-ad2e95f5c777" class="bulleted-list"><li style="list-style-type:circle">work_in_progress </li></ul><ul id="2fb1376e-f17b-45c5-9d92-8fa2ec1a9a72" class="bulleted-list"><li style="list-style-type:circle">waiting_for_review </li></ul><ul id="e6b45e6b-b4f8-490b-b503-045f6b0d5edf" class="bulleted-list"><li style="list-style-type:circle">finished</li></ul></li></ul><p id="8673d069-6e5d-493c-b66c-42ea3af08c68" class="">
</p><p id="bdfe9dc8-e4d0-4cc8-ba2e-fd86dd84b540" class="">4) Images</p><ul id="8fcbc505-6acd-4ee7-b0aa-ffc7664d8bc4" class="bulleted-list"><li style="list-style-type:disc">status <ul id="5b576d82-1bac-4ae0-b43e-7240e8d163d2" class="bulleted-list"><li style="list-style-type:circle">making_first_version</li></ul><ul id="b5bf536f-6ec9-4094-9716-7989ae40c8f9" class="bulleted-list"><li style="list-style-type:circle">in_review</li></ul><ul id="03a06e87-b7c7-4623-95f0-303eed9d7724" class="bulleted-list"><li style="list-style-type:circle">making_revisions</li></ul><ul id="d2edc895-0e30-4c0e-9d0a-ae8d36ee9bcc" class="bulleted-list"><li style="list-style-type:circle">final_version_delivered</li></ul></li></ul><p id="e0e18870-03d8-48b4-8bbe-6de5243063b9" class="">
</p><p id="050d06be-52c4-48fd-aa51-d3cc36e734bd" class="">5) Versions</p><ul id="09e747ea-f9c4-4a7b-9d41-25e1cb9026f2" class="bulleted-list"><li style="list-style-type:disc">url</li></ul><ul id="ff95a482-5b52-43aa-bbc4-06b5c6a80e91" class="bulleted-list"><li style="list-style-type:disc">version_number</li></ul><ul id="d7f50591-26a7-4e0c-adc5-0f1b37c02d7a" class="bulleted-list"><li style="list-style-type:disc">is_current </li></ul><p id="10b2d79d-b119-4f97-8193-22a1a808c59e" class="">
</p><p id="475b0416-859d-4bff-afe6-5e4416f1e2bd" class="">6) Revisions</p><ul id="2bc0cb08-7177-4d0e-81a9-5ed06875417c" class="bulleted-list"><li style="list-style-type:disc">message</li></ul><ul id="8a3a6efa-f8bf-4911-a747-8f09e6390f24" class="bulleted-list"><li style="list-style-type:disc">is_done</li></ul><ul id="289c1b88-7b48-4ecf-a6d5-9a1de564a06a" class="bulleted-list"><li style="list-style-type:disc">geometry_object</li></ul><p id="43033404-d973-40b7-b809-f23e7b4f556f" class="">
</p><p id="66449652-3e5b-4fb7-973e-8e29ce586a7b" class="">Let’s visualise our database with an ER (Entity Relation) Diagram :  </p><p id="1655ff65-318c-43b3-b85f-577613459adf" class="">
</p><p id="086926be-5397-4db7-b928-d872b3cccc57" class="">//TODO ADD DIAGRAM</p><p id="a0ee03f5-0474-4ad5-a103-43984f2cb8ce" class="">
</p><p id="8039e693-e894-4add-9f7a-f404b8035620" class="">We can now create our models, relations and migration.</p><p id="c756190f-f93a-4946-9eeb-0ad5e4bdd4cb" class="">
</p><h3 id="b7677696-3f56-42e5-b35f-43f86482eb4f" class="">Model creation</h3><p id="36212ae9-578b-449a-9413-c31a702837d4" class="">Let’s create all our models with the php artisan command.</p><p id="4d7b37a6-301a-422d-8c87-b6b972576b59" class="">
</p><p id="525652d1-da07-4bf2-b428-8b352807177f" class="">First the company : </p><pre id="80cf7d81-1c6b-4838-a771-047203858d4e" class="code"><code>php artisan make:model Company</code></pre><p id="51ebc1e3-5b72-41dd-a716-c8596dd8453e" class="">
</p><p id="530c1b24-758a-482b-bfb6-d6e85ceb0733" class="">We get the following model in<mark class="highlight-blue"> app/models/Company.php</mark> :</p><pre id="63bb2505-4c17-4b71-9432-24eb95bbbc80" class="code"><code>&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
}</code></pre><p id="6a7b6c6e-2cc6-4df0-8e68-70a902e9bbac" class="">
</p><p id="10298b0c-4b1c-4631-85fa-499965001019" class="">We repeat the same process for Projects, Images and Revisions and get the same code.</p><pre id="6ed6da99-64cf-4c04-9610-3d33d7576d6c" class="code"><code>php artisan make:model Project
php artisan make:model Image
php artisan make:model Revision</code></pre><p id="d05b9203-7a0f-49c4-ad2d-de8ac0b8ce89" class="">
</p><p id="344ea91c-bf3f-4117-93da-4f630aec7341" class="">The User model is already provided by Laravel.</p><p id="c3e57df7-3d6d-4143-8872-852e94fc329d" class="">
</p><p id="21cb4557-f7e0-4975-aff7-86c7c4e91905" class=""><span style="border-bottom:0.05em solid">We can now add the relations between our models.</span></p><p id="a7384009-a8ca-488f-a07c-63865954847f" class="">
</p><p id="41c214b8-8dd2-4344-bffc-09b45bc99d39" class=""><strong>Companies </strong>have a :</p><ul id="d2ddf74d-32e9-4d3b-a480-c9f7b8f2ba71" class="bulleted-list"><li style="list-style-type:disc">Many to Many relation with the Project model.</li></ul><ul id="6d3539f2-d09a-4de6-b331-6fd42b8f9b30" class="bulleted-list"><li style="list-style-type:disc">One to Many relation with the User model.</li></ul><p id="3a3d3b55-5ea7-4344-8d3f-6530b4990d37" class="">Giving us the following code for the <mark class="highlight-blue">Company.php </mark>model :</p><pre id="702ea029-03e4-466f-8f11-b991c79cf11d" class="code"><code>&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  use HasFactory;

  public function projects()
  {
    return $this-&gt;belongsToMany(Project::class);
  }

  public function users()
  {
    return $this-&gt;hasMany(User::class);
  }
}</code></pre><p id="2fc648ad-9d1b-49cc-b8dd-0030f52b24e4" class="">
</p><p id="cb7f936b-d3d6-4403-98be-6be8b72b2e6a" class=""><strong>Projects </strong>have a :</p><ul id="2c2a9c2f-bdcc-4ca5-b573-ca88c82bf43b" class="bulleted-list"><li style="list-style-type:disc">Many to Many relation with the Company model.</li></ul><ul id="54cdcb3f-bfc2-4024-9867-fb70ce85289d" class="bulleted-list"><li style="list-style-type:disc">One to Many relation with the Image model.</li></ul><p id="8f137605-53b6-4b23-9264-7a9677d92330" class="">Giving us the following code for the <mark class="highlight-blue">Project.php </mark>model :</p><pre id="b9964d0b-e65d-4568-88b3-804981f04c05" class="code"><code>&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  use HasFactory;

  public function image()
  {
    return $this-&gt;hasMany(Image::class);
  }

  public function companies()
  {
    return $this-&gt;belongsToMany(Company::class);
  }
}</code></pre><p id="7f524fb2-871b-4e48-b757-29ed66b1ae65" class="">
</p><p id="00b3fa1b-9276-4dd0-9aaf-df028b9840d7" class=""><strong>Images </strong>have a :</p><ul id="ccedd342-65b5-4102-a2da-e651573780ea" class="bulleted-list"><li style="list-style-type:disc">Many to One relation with the Project model.</li></ul><ul id="b509022f-4fce-4e51-8205-292cad00cdff" class="bulleted-list"><li style="list-style-type:disc">One to Many relation with the Revision model.</li></ul><ul id="5548c783-10ce-4f5d-92f2-6d36369c7fc9" class="bulleted-list"><li style="list-style-type:disc">Many to One relation with the Version model.</li></ul><p id="dc0061a0-4755-41e5-85b1-d361356cd1ec" class="">Giving us the following code for the <mark class="highlight-blue">Image.php </mark>model :</p><pre id="c0409ac8-bcf0-4c8f-a100-67dfec58cc14" class="code"><code>&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  use HasFactory;

  public function revisions()
  {
    return $this-&gt;hasMany(Revision::class);
  }

  public function project()
  {
    return $this-&gt;belongsTo(Project::class);
  }

  public function versions()
  {
    return $this-&gt;hasMany(Version::class);
  }
}</code></pre><p id="aaf36b0c-67ab-453f-9857-f1fdcd5e9d4a" class="">
</p><p id="cc1034a7-8fd3-4e23-88c9-dcae2a1579ad" class=""><strong>Versions </strong>have a :</p><ul id="f3146bda-2eab-42f6-81f1-15642b602bc7" class="bulleted-list"><li style="list-style-type:disc">Many to One relation with the Image model.</li></ul><p id="1917458c-1794-4b12-8251-e618e2f51d39" class="">Giving us the following code for the <mark class="highlight-blue">Version.php </mark>model :</p><pre id="3d87df75-58a3-4e47-a048-62c82eeaea66" class="code"><code>&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
  use HasFactory;

  public function image()
  {
    return $this-&gt;belongsTo(Image::class);
  }
}</code></pre><p id="464da52e-1622-43a4-b6c3-d82fc41efa5c" class="">
</p><p id="539ce2d9-5000-44da-8a0f-a61344edb134" class=""><strong>Revisions </strong>have a :</p><ul id="0c71cf0f-babd-4bc5-8bca-1ba1f1f3d132" class="bulleted-list"><li style="list-style-type:disc">Many to One relation with the Image model.</li></ul><ul id="0a10e33e-2216-4507-9121-b9d6649cd1ae" class="bulleted-list"><li style="list-style-type:disc">Many to One relation with the user model.</li></ul><p id="7815c7a5-2b1a-4f05-b8db-aef6f069e2d7" class="">Giving us the following code for the <mark class="highlight-blue">Revision.php </mark>model :</p><pre id="a8513306-2ea2-45d3-9218-de54c1fd33be" class="code"><code>&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
  use HasFactory;

  public function image()
  {
    return $this-&gt;belongsTo(Rendering::class);
  }

  public function user()
  {
    return $this-&gt;belongsTo(User::class);
  }
}</code></pre><p id="be872d15-7564-485a-aadf-81892c522027" class="">
</p><h3 id="2523f6e3-ee45-4a2b-9552-241af0ce48fb" class="">Database migration</h3><p id="b0378597-cfb8-4ec7-bb83-1f0978ac36a5" class="">
</p><p id="27627987-c2ee-4465-adbc-b36264040b08" class="">Let’s create a new database migration with php artisan: </p><pre id="7ec12bdd-b3b3-47df-ae34-7f6b5093c047" class="code"><code>php artisan make:migration create_all_tables</code></pre><p id="9213a9f9-72a0-4485-9a8e-ea40f4c871c3" class="">This creates a new migration in <mark class="highlight-blue">database/migrations</mark></p><p id="c5cb70e2-3e2f-41dd-b1ba-ff9d8007604c" class="">
</p><p id="5f7116c4-ec09-4374-9a0f-8ecc69817f2d" class="">Based on our previously established models and relations, we can create the following migration file : </p><pre id="0965c500-a802-4450-b6bf-01d188e6bc5f" class="code"><code>&lt;?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    //create the tables and columns
    Schema::create(&#x27;projects&#x27;, function (Blueprint $table) {
      $table-&gt;id();
      $table-&gt;timestamps();
      $table-&gt;string(&quot;name&quot;);
      $table-&gt;integer(&quot;revision_rounds&quot;);
      $table-&gt;enum(&#x27;status&#x27;,  [&#x27;work_in_progress&#x27;, &#x27;waiting_for_review&#x27;, &#x27;finished&#x27;])-&gt;default(&#x27;work_in_progress&#x27;);
    });

    Schema::create(&#x27;images&#x27;, function (Blueprint $table) {
      $table-&gt;id();
      $table-&gt;timestamps();
      $table-&gt;enum(&#x27;status&#x27;,  [&#x27;making_first_version&#x27;, &#x27;in_review&#x27;, &#x27;making_revisions&#x27;, &#x27;final_version_delivered&#x27;,])-&gt;default(&#x27;making_first_version&#x27;);
    });

    Schema::create(&#x27;versions&#x27;, function (Blueprint $table) {
      $table-&gt;id();
      $table-&gt;timestamps();
      $table-&gt;string(&quot;url&quot;);
      $table-&gt;string(&quot;version_number&quot;);
      $table-&gt;boolean(&quot;is_current&quot;)-&gt;default(true);
    });

    Schema::create(&#x27;revisions&#x27;, function (Blueprint $table) {
      $table-&gt;id();
      $table-&gt;timestamps();
      $table-&gt;string(&quot;message&quot;);
      $table-&gt;boolean(&quot;is_done&quot;)-&gt;default(false);
      $table-&gt;json(&quot;geometry_object&quot;)-&gt;default(false);
    });

    Schema::create(&#x27;companies&#x27;, function (Blueprint $table) {
      $table-&gt;id();
      $table-&gt;timestamps();
      $table-&gt;string(&quot;name&quot;);
      $table-&gt;enum(&#x27;company_type&#x27;,  [&#x27;designer&#x27;, &#x27;client&#x27;]);
    });


    //Create the relations 
    Schema::table(&#x27;images&#x27;, function (Blueprint $table) {
      $table-&gt;unsignedBigInteger(&#x27;project_id&#x27;);
      $table-&gt;foreign(&#x27;project_id&#x27;)-&gt;references(&#x27;id&#x27;)-&gt;on(&#x27;projects&#x27;);
    });

    Schema::table(&#x27;versions&#x27;, function (Blueprint $table) {
      $table-&gt;unsignedBigInteger(&#x27;image_id&#x27;);
      $table-&gt;foreign(&#x27;image_id&#x27;)-&gt;references(&#x27;id&#x27;)-&gt;on(&#x27;images&#x27;);
    });

    Schema::table(&#x27;revisions&#x27;, function (Blueprint $table) {
      $table-&gt;unsignedBigInteger(&#x27;image_id&#x27;);
      $table-&gt;foreign(&#x27;image_id&#x27;)-&gt;references(&#x27;id&#x27;)-&gt;on(&#x27;images&#x27;);

      $table-&gt;unsignedBigInteger(&#x27;user_id&#x27;);
      $table-&gt;foreign(&#x27;user_id&#x27;)-&gt;references(&#x27;id&#x27;)-&gt;on(&#x27;users&#x27;);
    });

    Schema::table(&#x27;users&#x27;, function (Blueprint $table) {
      $table-&gt;unsignedBigInteger(&#x27;company_id&#x27;);
      $table-&gt;foreign(&#x27;company_id&#x27;)-&gt;references(&#x27;id&#x27;)-&gt;on(&#x27;companies&#x27;);
    });
  }

  public function down()
  {
    Schema::dropIfExists(&#x27;companies&#x27;);
    Schema::dropIfExists(&#x27;projects&#x27;);
    Schema::dropIfExists(&#x27;images&#x27;);
    Schema::dropIfExists(&#x27;versions&#x27;);
    Schema::dropIfExists(&#x27;revisions&#x27;);
  }
};</code></pre><p id="dd0da1cd-fb38-415c-b37e-789075f6027f" class="">
</p><p id="b552e75c-2bfe-400b-90d9-57b95a39824b" class="">Let’s now tackle the missing many to many relationship between companies and projects.</p><p id="bd599d54-9471-43b7-aae4-492ec94ded1f" class="">In order to do this, we need a <mark class="highlight-blue">company_project</mark> pivot table. </p><p id="5de24a91-a697-4fd3-a2d9-052f3b2eddbe" class="">The order of the table names is important  as the Eloquent ORM will be looking for the pivot table with the models names in alphabetical order. </p><p id="fdd0d70b-8d98-42b7-bbe7-e5cb1d7d6352" class="">
</p><p id="67dbb9e2-f92f-442c-961a-c49dc712f7e6" class="">Let’s use php artisan again to create a new table : </p><pre id="923bd1d0-67d8-4503-b41d-9a30466d9122" class="code"><code>php artisan make:migration company_project_pivot</code></pre><p id="713a341d-0a11-4c60-90c4-7c3a4c6ad03b" class="">
</p><p id="9f2442ea-f58a-484c-9bda-fbb90bd1358e" class="">We can now add our pivot table foreign ids for company and project :</p><pre id="9db8e50b-84a2-4bf7-a835-3b16616e0e3a" class="code"><code>&lt;?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */

  public function up()
  {
    Schema::create(&#x27;company_project&#x27;, function (Blueprint $table) {
      $table-&gt;increments(&#x27;id&#x27;);
      $table-&gt;timestamps();
      $table-&gt;unsignedBigInteger(&#x27;company_id&#x27;);
      $table-&gt;unsignedBigInteger(&#x27;project_id&#x27;);

      $table-&gt;foreign(&#x27;company_id&#x27;)-&gt;references(&#x27;id&#x27;)-&gt;on(&#x27;companies&#x27;)
        -&gt;onDelete(&#x27;restrict&#x27;)
        -&gt;onUpdate(&#x27;restrict&#x27;);
      $table-&gt;foreign(&#x27;project_id&#x27;)-&gt;references(&#x27;id&#x27;)-&gt;on(&#x27;projects&#x27;)
        -&gt;onDelete(&#x27;restrict&#x27;)
        -&gt;onUpdate(&#x27;restrict&#x27;);
    });
  }

  public function down()
  {
    Schema::drop(&#x27;company_project&#x27;);

    Schema::table(&#x27;company_project&#x27;, function (Blueprint $table) {
      $table-&gt;dropForeign(&#x27;company_project_company_id_foreign&#x27;);
    });
    Schema::table(&#x27;company_project&#x27;, function (Blueprint $table) {
      $table-&gt;dropForeign(&#x27;company_project_project_id_foreign&#x27;);
    });
  }
};</code></pre><p id="8195563c-c780-4a94-ad0e-1eed65039f35" class="">
</p><p id="16b22226-159d-444d-a7e4-3b7db4b48fa8" class="">We can now finally run our migration ! </p><p id="e257083a-d741-4251-b288-1dcb598e3a38" class="">
</p><pre id="ad3f7eee-ec2f-4fb1-8a8e-050935758ef1" class="code"><code>php artisan migrate</code></pre><p id="4cb0a0d9-76a3-4e83-baed-ed3f3eb30ba4" class="">
</p><p id="895bc443-f402-4305-a3ee-73023931ac55" class="">If you followed everything, you should get a successful migration :</p><figure id="6d7c23a2-e4d3-47a1-b850-abf65729c645" class="image"><a href="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%205.png"><img style="width:1356px" src="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%205.png"/></a></figure><p id="fef459d6-6fd0-40ff-95f5-d5e8343340b2" class="">
</p><p id="e8b18177-b2b2-4385-b354-9fa517b44b31" class="">We made some good progress, let’s save our work :</p><pre id="85f4422f-6c0b-448b-8d32-f0bbfcf494d2" class="code"><code>git add --all 
git commit --m &quot;models, relations and migration added&quot;
git push -u origin main</code></pre><p id="56a24c95-0dcd-47d5-888d-3dc2a86cf276" class="">
</p><h3 id="0900d08e-93a5-4d8d-b015-f78618cd4b87" class="">Defining our resources </h3><p id="6a162d83-59f6-463b-abfc-89dec50419dc" class="">We first need a way to serialize our models before returning data to our users. Resources are built in Laravel to serve this purpose. </p><p id="cf4112f7-ad06-4407-959b-3bafc9bf9b80" class="">
</p><p id="64bc0462-540c-4622-b072-c7804c9ec48b" class="">In case you have some doubts about serialization, here is a good picture to understand it : </p><figure id="c7bad877-ec25-4a53-be2d-7d353ab15484" class="image"><a href="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%206.png"><img style="width:859px" src="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%206.png"/></a></figure><p id="8f0773d6-f2a4-497f-a5ba-82793fa4265d" class="">
</p><p id="ef69b526-2b77-4f2f-894e-de2fc7d2e30e" class="">For each model, we will also return its related models.
For example, when returning a Company Resource we will also return the related projects. </p><p id="6c8462a3-b4ed-42a3-a104-4bbbf1fa1758" class="">Using php artisan, we are going to generate a resource for each of our models :</p><pre id="92fba850-09fc-407f-9e2b-7938ccbcf917" class="code"><code>php artisan make:resource CompanyResource</code></pre><p id="1abc21d8-72f1-4ff6-a7df-7958bf276c64" class="">
</p><p id="ea1a4ad1-2a9e-44a5-9ed6-3f1e4bd38f96" class="">Giving us this <mark class="highlight-blue">CompanyResource.php</mark> file in <mark class="highlight-blue">app/Http/Resources </mark>:</p><pre id="53e69ea3-480d-4fc7-9557-470a3d233f12" class="code"><code>&lt;?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}</code></pre><p id="ec302d69-a919-46a4-afb4-416e7b88d1be" class="">
</p><p id="011301ce-07d8-4bb7-bbe7-3d6ce17f3b7d" class="">We can now specify how we would like to return our object’s data : </p><pre id="4ace71f1-7d2f-48c2-b066-464557c9e032" class="code"><code>&lt;?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
  public function toArray($request)
  {
    return [
      &#x27;id&#x27; =&gt; $this-&gt;id,
      &#x27;name&#x27; =&gt; $this-&gt;name,
      &#x27;company_type&#x27; =&gt; $this-&gt;company_type,
      &#x27;created_at&#x27; =&gt; (string) $this-&gt;created_at,
      &#x27;updated_at&#x27; =&gt; (string) $this-&gt;updated_at,
      &#x27;users&#x27; =&gt; $this-&gt;users,
      &#x27;projects&#x27; =&gt; $this-&gt;projects,
    ];
  }
}</code></pre><p id="504b4215-b8bd-4c41-b04a-6438b220fd26" class="">
</p><p id="eefd0a87-4743-405f-8f88-0f4898899000" class="">Let’s repeat the same steps for each model :</p><pre id="59ba4209-c434-42f9-89d6-e5eb6f563985" class="code"><code>php artisan make:resource ProjectResource</code></pre><pre id="d3ab87a4-3dd6-49f5-8abb-68bae2cd36c8" class="code"><code>&lt;?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
  public function toArray($request)
  {
    return [
      &#x27;id&#x27; =&gt; $this-&gt;id,
      &#x27;name&#x27; =&gt; $this-&gt;name,
      &#x27;revision_rounds&#x27; =&gt; $this-&gt;revision_rounds,
      &#x27;status&#x27; =&gt; $this-&gt;status,
      &#x27;created_at&#x27; =&gt; (string) $this-&gt;created_at,
      &#x27;updated_at&#x27; =&gt; (string) $this-&gt;updated_at,
      &#x27;images&#x27; =&gt; $this-&gt;images,
      &#x27;companies&#x27; =&gt; $this-&gt;companies,
    ];
  }
}</code></pre><p id="d276bf06-5268-4c37-a7ce-d23b2aed8d01" class="">
</p><pre id="4060d12b-b5e0-42a2-8c37-07658132cdc9" class="code"><code>php artisan make:resource ImageResource</code></pre><pre id="dcc8f770-b8fa-4383-b457-eaa79300d8eb" class="code"><code>&lt;?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
  public function toArray($request)
  {
    return [
      &#x27;id&#x27; =&gt; $this-&gt;id,
      &#x27;status&#x27; =&gt; $this-&gt;status,
      &#x27;created_at&#x27; =&gt; (string) $this-&gt;created_at,
      &#x27;updated_at&#x27; =&gt; (string) $this-&gt;updated_at,
      &#x27;project&#x27; =&gt; $this-&gt;project,
      &#x27;revisions&#x27; =&gt; $this-&gt;revisions,
      &#x27;versions&#x27; =&gt; $this-&gt;versions,

    ];
  }
}</code></pre><p id="6cd2b6b5-5114-4080-a296-eb325cab9521" class="">
</p><pre id="7891d4f3-2a0d-4990-80d3-1fd938d84b29" class="code"><code>php artisan make:resource RevisionResource</code></pre><pre id="f2942982-41f5-4485-b219-8d3aa890f9c8" class="code"><code>&lt;?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RevisionResource extends JsonResource
{
  public function toArray($request)
  {
    return [
      &#x27;id&#x27; =&gt; $this-&gt;id,
      &#x27;description&#x27; =&gt; $this-&gt;message,
      &#x27;is_done&#x27; =&gt; $this-&gt;is_done,
      &#x27;geometry_object&#x27; =&gt; $this-&gt;geometry_object,
      &#x27;created_at&#x27; =&gt; (string) $this-&gt;created_at,
      &#x27;updated_at&#x27; =&gt; (string) $this-&gt;updated_at,
      &#x27;image&#x27; =&gt; $this-&gt;image,
      &#x27;user&#x27; =&gt; $this-&gt;user,
    ];
  }
}</code></pre><p id="5fd5023b-a788-4a33-9966-85c3289ac329" class="">
</p><pre id="6ade4ac6-aa9a-460f-a712-ca590c24abca" class="code"><code>php artisan make:resource VersionResource</code></pre><pre id="4e4b5e03-98e1-4716-808c-9fb39a860715" class="code"><code>&lt;?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VersionResource extends JsonResource
{
  public function toArray($request)
  {
    return [
      &#x27;id&#x27; =&gt; $this-&gt;id,
      &#x27;url&#x27; =&gt; $this-&gt;url,
      &#x27;version_number&#x27; =&gt; $this-&gt;version_number,
      &#x27;is_current&#x27; =&gt; $this-&gt;is_current,
      &#x27;created_at&#x27; =&gt; (string) $this-&gt;created_at,
      &#x27;updated_at&#x27; =&gt; (string) $this-&gt;updated_at,
      &#x27;image&#x27; =&gt; $this-&gt;image,
    ];
  }
}</code></pre><p id="1038d13a-97bf-4903-893a-9de972fa61bd" class="">
</p><pre id="fd7c7e9e-d4d8-45b4-be80-fe3c207de0a0" class="code"><code>php artisan make:resource UserResource</code></pre><pre id="4cb2a2d7-f31f-4093-97c4-06e7bba2ebe7" class="code"><code>&lt;?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    return [
      &#x27;id&#x27; =&gt; $this-&gt;id,
      &#x27;name&#x27; =&gt; $this-&gt;name,
      &#x27;email&#x27; =&gt; $this-&gt;email,
      &#x27;company&#x27; =&gt; $this-&gt;company,
      &#x27;revisions&#x27; =&gt; $this-&gt;revisions,
    ];
  }
}</code></pre><p id="8dc20f37-e881-4719-9fc4-f6105693c4d4" class="">
</p><h3 id="38da28d2-568a-460f-a849-2f33a7964175" class="">Creating controllers</h3><p id="6a007aa6-e408-49f0-bd60-f5b264030707" class="">Now that the resources are ready, we need controllers.</p><p id="6610435e-138d-43f7-9ecb-ebaff827ed1a" class="">For each model we will need to define basic CRUD operations:</p><p id="f4b87ab6-84a6-429f-b70a-c83b1045f549" class="">Good news, we can use an artisan command to write the boilerplate for us.</p><p id="8d063549-23b4-4357-ade8-9d1338665e53" class="">
</p><p id="a0d4b4a9-4296-4aee-afe0-73a8fff146b8" class="">Let’s start with the CompanyController : </p><pre id="3e5e8228-bbbe-4f17-bbc8-12ef9e913e70" class="code"><code>php artisan make:controller CompanyController --resource --model=Company</code></pre><p id="20d01e7e-d357-4617-a5c9-1f804e13931c" class=""><mark class="highlight-blue">--resource </mark>is used to add index, create, store, show, edit, update and destroy methods.</p><p id="9f033410-2b37-45b6-9aaf-13a177278952" class=""><mark class="highlight-blue">--model </mark>allows us to inject our model in the methods.</p><p id="e34a99ba-7966-470d-b0b7-6d2ebf62537e" class="">
</p><p id="d966b0d9-0074-4adc-8f7f-58b148325928" class="">This command generates this file in<mark class="highlight-blue"> Http/Controllers/CompanyController.php</mark></p><pre id="9f11a5f8-1351-4b9c-9899-bdf536baccd0" class="code"><code>&lt;?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {}

    public function create()
    {}

    public function store(Request $request)
    {}

    public function show(Company $company)
    {}

    public function edit(Company $company)
    {}

    public function update(Request $request, Company $company)
    {}

    public function destroy(Company $company)
    {}
}</code></pre><p id="df867593-691a-4914-84e9-e30a2ceaf45b" class="">We can delete the create and edit actions (used to handle forms). We get the following code :</p><pre id="3eb47c8f-fc57-44ac-8af0-4218fbf4efe7" class="code"><code>&lt;?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {}

    public function store(Request $request)
    {}

    public function show(Company $company)
    {}

    public function update(Request $request, Company $company)
    {}

    public function destroy(Company $company)
    {}
}</code></pre><p id="4e73ddea-8721-4a95-b21a-ebffe46665c2" class="">
</p><p id="1299b271-d611-41d6-8541-68a250f0ac74" class="">Now let’s handle the different CRUD operations.</p><p id="18f060b9-6846-436d-9dde-e40eac680832" class="">Here is a quick recap of all methods in our Controller</p><table id="bb7deaf8-dd44-4c65-acc9-735af6fcf1fe" class="simple-table"><tbody><tr id="26d3bfce-9aec-41a8-8685-f3a2df93af80"><td id="|C|c" class="" style="width:349px">returns a list of objects</td><td id="tFFl" class="" style="width:349px">Index</td></tr><tr id="e5cfe057-e9b8-454f-8382-359caf82cf23"><td id="|C|c" class="" style="width:349px">returns one object</td><td id="tFFl" class="" style="width:349px">Show</td></tr><tr id="c5e774c5-18c4-455b-9997-39ef3c58498b"><td id="|C|c" class="" style="width:349px">Add an object to the database</td><td id="tFFl" class="" style="width:349px">Store</td></tr><tr id="a5750f3a-a52b-47d0-bdbf-8e945dcd57da"><td id="|C|c" class="" style="width:349px">Change an entry in the database</td><td id="tFFl" class="" style="width:349px">Update</td></tr><tr id="5bbbcf2d-0110-43d2-9ce3-4a1a81ea1ec0"><td id="|C|c" class="" style="width:349px">Remove an entry in the database</td><td id="tFFl" class="" style="width:349px">Destroy</td></tr></tbody></table><p id="8e4c5c00-d146-485b-bdd5-c5de0f9714a9" class="">Here is what we are going to do for each method :</p><ul id="3e5acab5-ed4b-40ef-aa5f-ef46182759d5" class="bulleted-list"><li style="list-style-type:disc"><strong>Index </strong>: return all entries that belong to the current user</li></ul><ul id="9e02637e-ed6a-44de-b5b6-1c0e89e1fb0a" class="bulleted-list"><li style="list-style-type:disc"><strong>Show</strong> : return the requested entry if it belongs to the current user</li></ul><ul id="69346c02-8804-4ff9-8d02-4e187cbc7865" class="bulleted-list"><li style="list-style-type:disc"><strong>Store </strong>: validate the request and add the entry to the database</li></ul><ul id="774f28ea-b264-4246-8d46-e89eb1968e8b" class="bulleted-list"><li style="list-style-type:disc"><strong>Update </strong>: validate the request and update the entry to the database</li></ul><ul id="8ffe2cea-6ed6-44d0-8eda-6c5cbe77a012" class="bulleted-list"><li style="list-style-type:disc"><strong>Destroy </strong>: remove the entry if it belongs to the current user </li></ul><p id="54cfa9a4-d212-4126-a6e9-90f1b07f9208" class="">
</p><p id="c6467ca4-a708-4e48-8391-4bdb3a35f869" class="">Let’s start with the Company Controller </p><pre id="ee799c68-3df6-4115-9b8d-d9f0656a0a54" class="code"><code>&lt;?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
// a user only has one company so we will return the user&#x27;s company

}

    public function store(Request $request)
    {}

    public function show(Company $company)
    {}

    public function update(Request $request, Company $company)
    {}

    public function destroy(Company $company)
    {}
}
</code></pre><p id="786928a9-d950-4097-a838-2622e976b7e5" class="">
</p><p id="c30096b8-3723-49bc-8471-339ba714cfbf" class="">
</p><p id="3dfc9611-14b1-459a-8a7a-b8325b338c4b" class="">
</p><p id="e33299af-6dee-4000-9b7e-a5ea7033e7d7" class="">
</p><p id="bcd02d7e-29a8-4249-befb-0225d4d22de8" class="">
</p><p id="00bd44f7-50ab-44e6-91de-fefe5199255e" class="">
</p><p id="2d6331c8-1ab8-4067-80f9-e3fe35ecb58c" class="">
</p><p id="0ce2cd8d-2a5f-46d3-b696-78865a70f99f" class="">
</p><p id="76136205-8348-4190-b4f8-7b19d740bf61" class="">
</p><p id="3240616e-c341-4110-8ef3-a7f391b3a1b9" class="">
</p><p id="6117cfbe-5e3c-4669-9742-2801bb6d9d31" class="">
</p><h3 id="9738192e-fc80-4210-ae92-8a0da7f7a7b6" class="">Defining our routes</h3><p id="878aae03-3c3d-4543-ae07-1d7106862168" class="">
</p><p id="cf869581-a440-47c4-9817-1b6c589a5039" class="">Before adding our routes, let’s check the one we already have using php artisan :</p><pre id="06b61820-83c6-421d-a045-e53ddcb3114b" class="code"><code>php artisan route:list</code></pre><p id="18d62a96-dae2-4ff5-b6e9-f09728696a73" class="">
</p><figure id="28f3bbba-a2c5-400a-8298-d6b70855285b" class="image"><a href="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%207.png"><img style="width:1357px" src="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%207.png"/></a></figure><ul id="3d79afc0-08be-401b-aa9f-f07efd7ea0f5" class="bulleted-list"><li style="list-style-type:disc">A route for the homepage of our application. We already visited it, it’s automatically generated by Laravel.</li></ul><ul id="38bfc3c1-6862-41bb-84be-2b9e96393215" class="bulleted-list"><li style="list-style-type:disc">3 routes concerning Spatie, one of the best packages to manage permissions in a Laravel app.</li></ul><ul id="6c8432e9-12a2-479e-9b22-575b81263cc1" class="bulleted-list"><li style="list-style-type:disc">A route to get our users.</li></ul><ul id="808389e7-33b3-4a7e-a0b2-95e4b525eb55" class="bulleted-list"><li style="list-style-type:disc">A route generated by sanctum to get a csrf cookie. </li></ul><p id="1a65a333-125f-4276-9b31-359c30952de4" class="">
</p><p id="3161eb70-8e96-4df0-af8a-552330d0fb54" class="">
</p><p id="f63613f2-9653-4936-9c8e-0902577f0170" class="">Let’s open the <mark class="highlight-blue">api.php</mark> file in the<mark class="highlight-blue"> route </mark>folder and add our new routes.</p><p id="c94116a3-c069-4460-b654-03f124279d3a" class="">We currently only have the user route registered and protected by the sanctum middleware : </p><pre id="6e4e3280-eeba-4c9e-adb1-657a112260e2" class="code"><code>&lt;?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the &quot;api&quot; middleware group. Enjoy building your API!
|
*/

Route::middleware(&#x27;auth:sanctum&#x27;)-&gt;get(&#x27;/user&#x27;, function (Request $request) {
    return $request-&gt;user();
});</code></pre><p id="ccab234b-373d-4823-be97-2f3536e6f12d" class="">
</p><p id="9864082b-24d3-4bd0-ad48-3214fb7b06dc" class="">We are going to add all our routes using apiResource. </p><p id="035aa931-df21-4570-8b55-02cd1a57324e" class="">Doing so, all our CRUD operations routes will be automatically registered.</p><p id="909ed97c-331f-46f4-bc81-402c0a348900" class="">Don’t forget to import our controllers in the file.</p><p id="706a6ffd-3204-4d0c-b2a9-a8469fa74ea2" class="">We will add the routes to the sanctum middleware and take care of authentication later.</p><pre id="f77c1a86-40f4-4844-a707-2581de536b28" class="code"><code>&lt;?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RevisionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VersionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the &quot;api&quot; middleware group. Enjoy building your API!
|
*/

Route::middleware(&#x27;auth:sanctum&#x27;)-&gt;get(&#x27;/user&#x27;, function (Request $request) {
  return $request-&gt;user();
});


Route::apiResource(&#x27;companies&#x27;, CompanyController::class);
Route::apiResource(&#x27;projects&#x27;, ProjectController::class);
Route::apiResource(&#x27;images&#x27;, ImageController::class);
Route::apiResource(&#x27;versions&#x27;, VersionController::class);
Route::apiResource(&#x27;revisions&#x27;, RevisionController::class);
Route::apiResource(&#x27;users&#x27;, UserController::class);</code></pre><p id="e8bdb92f-3706-477b-aaec-5326019b6d59" class="">
</p><p id="c03d130f-53c3-4614-afe5-bb78805f2302" class="">Let’s check our new routes !</p><pre id="029f71ed-d521-4218-a010-a82009aba5b7" class="code"><code>php artisan route:list</code></pre><figure id="59779fc2-ddbb-4205-8688-f0c954864cb1" class="image"><a href="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%208.png"><img style="width:1482px" src="Design%20Project%20Management%20Dashboard%2093251b0070794bf0af6662acac22be3a/Untitled%208.png"/></a></figure><p id="61ba3f31-f217-45df-8681-a4837ebfd984" class="">
</p><p id="8f36590a-7b2c-4e09-80a8-b6a83241c420" class="">You see how easy it is to generate all of our routes for basic CRUD operations ?</p><p id="0741fc5e-7fd2-41b8-9c14-268958ff2001" class="">
</p><p id="03c07044-7ab6-42c7-94d8-cb1ea9a7e006" class="">We made some good progress, let’s save our work :</p><pre id="37e3b1fe-59d3-4101-ae05-493dceddc00a" class="code"><code>git add --all 
git commit --m &quot;resources, basic controllers and routes added&quot;
git push -u origin main</code></pre><h3 id="87f59087-a56b-4e0d-b41c-fbc15ec43f24" class="">Testing our endpoints </h3><p id="95664a81-1649-4887-9ab4-b87518caeb15" class="">
</p><ul id="73efd4d0-0e51-4e19-8cbc-3800b2dcc90f" class="bulleted-list"><li style="list-style-type:disc">Creating a dedicated database</li></ul><p id="ab8c5e26-682d-4807-8ebc-fc67fa0e39ab" class="">
</p><ul id="70c442a6-6f51-4960-a912-59368a73ae64" class="bulleted-list"><li style="list-style-type:disc">refresh database once before all tests</li></ul><p id="c1e62abd-4b8b-4aaf-b3f6-118b5b71b23d" class=""><strong><strong>RefreshDatabase </strong></strong>refreshes before each test, so it’s not gonna work for us </p><p id="84c016a8-a33b-44e2-b1cd-15c9e2fa005d" class="">This <a href="https://medium.com/helpspace/fresh-database-once-befor-testing-starts-faa2b10dc76f">tutorial </a>gives a perfect example for our purpose</p><p id="e9696b95-1764-48f2-bfe7-446932ea993c" class="">The only thing we need to add to the tutorial is “:void” after declaring the setUp function or it will not work :</p><pre id="05071555-ea60-4072-a782-52683b880aae" class="code"><code>&lt;?php

namespace Tests;

use Illuminate\Support\Facades\Artisan;

trait MigrateFreshSeedOnce
{
  /**
   * If true, setup has run at least once.
   * @var boolean
   */
  protected static $setUpHasRunOnce = false;
  /**
   * After the first run of setUp &quot;migrate:fresh --seed&quot;
   * @return void
   */
  public function setUp(): void //don&#x27;t forget this
  {
    parent::setUp();
    if (!static::$setUpHasRunOnce) {
      Artisan::call(&#x27;migrate:fresh&#x27;);
      Artisan::call(
        &#x27;db:seed&#x27;,
        [&#x27;--class&#x27; =&gt; &#x27;DatabaseSeeder&#x27;]
      );
      static::$setUpHasRunOnce = true;
    }
  }
}</code></pre><p id="8638a766-279e-461b-beaf-0c74daeb5999" class="">
</p><ol type="1" id="f8680f4d-2f06-447c-8543-e242f68de94f" class="numbered-list" start="1"><li>define goal of test</li></ol><ol type="1" id="1e43c3ed-2ead-4d67-a4fb-4a822a858de3" class="numbered-list" start="2"><li>replicate environment and restrictions</li></ol><ol type="1" id="2768fccc-13ca-4bb9-9481-f6a86757d1cc" class="numbered-list" start="3"><li>define result expected</li></ol><ol type="1" id="95c83ef7-1356-41e8-9db2-d3d265f26dff" class="numbered-list" start="4"><li>compare the result return with the result expected</li></ol><p id="9c7d713f-be3f-4383-a27b-eff44366d2bb" class="">
</p><p id="55263742-687d-48c4-940a-b2a516f2b5d6" class="">
</p><p id="b955c9e5-cfd5-4a6e-9c53-06b5026c573e" class="">Let’s write our company endpoints test :</p><pre id="6b302210-aa03-40db-b7bc-4597a6cbd281" class="code"><code>&lt;?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ApiTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  public function test_index()
  {
    $user = User::factory()-&gt;create();
    $session = $this-&gt;actingAs($user);

    $response = $session-&gt;get(&#x27;/api/companies&#x27;);
    $response-&gt;assertStatus(200);
  }
  public function test_show()
  {
    $response = $this-&gt;get(&#x27;/api/companies/1&#x27;);
    $response-&gt;assertStatus(200);
  }

  public function test_store()
  {
    $response = $this-&gt;post(&#x27;/api/companies&#x27;, [&#x27;name&#x27; =&gt; &#x27;Sally&#x27;, &#x27;company_type&#x27; =&gt; &#x27;designer&#x27;]);

    $response-&gt;assertStatus(201);
  }
}</code></pre><p id="51186a5e-975e-4ff6-966c-4395e9128a79" class="">
</p><p id="aec8f28a-84e7-42e9-a679-8f42054845b5" class="">Our app came with a user factory, we just need to add a company_id to the definition method.
Let’s just add “1” for now :</p><pre id="bc377e34-80a9-4c50-a932-2a3561e14494" class="code"><code>&lt;?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory&lt;\App\Models\User&gt;
 */
class UserFactory extends Factory
{
  /**
   * Define the model&#x27;s default state.
   *
   * @return array&lt;string, mixed&gt;
   */
  public function definition()
  {
    return [
      &#x27;name&#x27; =&gt; fake()-&gt;name(),
      &#x27;email&#x27; =&gt; fake()-&gt;unique()-&gt;safeEmail(),
      &#x27;email_verified_at&#x27; =&gt; now(),
      &#x27;password&#x27; =&gt; &#x27;$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi&#x27;, // password
      &#x27;remember_token&#x27; =&gt; Str::random(10),
      &#x27;company_id&#x27; =&gt; 1,
    ];
  }

  /**
   * Indicate that the model&#x27;s email address should be unverified.
   *
   * @return static
   */
  public function unverified()
  {
    return $this-&gt;state(fn (array $attributes) =&gt; [
      &#x27;email_verified_at&#x27; =&gt; null,
    ]);
  }
}</code></pre><p id="f9f6c000-5093-42a5-99b8-da5978eb5f53" class="">
</p><p id="310ca7d0-384b-40be-b317-62f3cfb88ad5" class="">
</p><h3 id="bf73e171-4a52-4839-bb76-606f59886f29" class="">Authentication</h3><p id="197243b2-419c-441c-ac07-b78cd9d95581" class="">Laravel fortify</p><pre id="acb5a472-5441-4f03-8672-a37572ecde37" class="code"><code>composer require laravel/fortify
php artisan vendor:publish --provider=&quot;Laravel\Fortify\FortifyServiceProvider&quot;
php artisan migrate</code></pre><pre id="2157a419-5917-487e-89d1-f48dec464645" class="code"><code>&#x27;views&#x27; =&gt; false,</code></pre><p id="92d6a94d-ed98-4990-a3ce-ec083c5967a1" class="">
</p></div></article></body></html>
