
CTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>andreas08: ignore the trends</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Your website description goes here" />
<meta name="keywords" content="your,keywords,goes,here" />


<style type="text/css">
/* andreas08 - an open source xhtml/css website layout by Andreas Viklund - http://andreasviklund.com . Free to use in any way and for any purpose as long as the proper credits are given to the original designer. Version: 1.0, November 28, 2005 */

/**************** Body and tag styles ***************
 * <!-- 
 *
 * <link rel="stylesheet" href="andreas08.css" type="text/css" media="screen,projection" /> -->
 * */

*{margin:0; padding:0;}
.codeblock {
  border-radius: 3px;
  color:#525C65;
  font-size: 90%;
  white-space: pre;
  padding:10px 50px;
  font-weight:500;
  font-family:Consolas, monaco, monospace;
  display: block;
  margin: auto;
  border:0px solid #c9c9c9;

}

body{
font:76% Verdana,Tahoma,Arial,sans-serif;
line-height:1.4em;
text-align:center;
color:#303030;
background:#e8eaec;
}

a{
color:#467aa7;
/* font-weight:bold; */
text-decoration:none;
background-color:inherit;
}

a:hover{color:#2a5a8a; text-decoration:none; background-color:inherit;}
a img{border:none;}

p{padding:0 0 1.6em 0;}
p form{margin-top:0; margin-bottom:20px;}

img.left,img.center,img.right{padding:4px; border:1px solid #a0a0a0;}
img.left{float:left; margin:0 12px 5px 0;}
img.center{display:block; margin:0 auto 5px auto;}
img.right{float:right; margin:0 0 5px 12px;}

/**************** Header and navigation styles ****************/

#container{
#width:1260px;
#margin:20px auto;
#padding:1px 0;
#text-align:left;
#background:#ffffff;
#color:#303030;
#border:2px solid #a0a0a0;
#}
#
##header{
#height:110px;
#width:1258px;
#margin:0 1px 1px 1px;
#background:#467aa7;
#color:#ffffff;
#}
#
##header h1{
#padding:35px 0 0 20px;
#font-size:2.4em;
#background-color:inherit;
#color:#ffffff;
#letter-spacing:-2px;
#font-weight:normal;
#}
#
##header h2{
#margin:10px 0 0 20px;
#font-size:1.4em;
#background-color:inherit;
#color:#f0f2f4;
#letter-spacing:-1px;
#font-weight:normal;
#}
#
##navigation{
#height:2.2em;
#line-height:2.2em;
#width:1258px;
#margin:0 1px;
#background:#578bb8;
#color:#ffffff;
#}
#
##navigation li{
#float:left;
#list-style-type:none;
#border-right:1px solid #ffffff;
#white-space:nowrap;
#}
#
##navigation li a{
#display:block;
#padding:0 10px;
#font-size:0.8em;
#font-weight:normal;
#text-transform:uppercase;
#text-decoration:none;
#background-color:inherit;
#color: #ffffff;
#}
#
#* html #navigation a {width:1%;}
#
##navigation .selected,#navigation a:hover{
#background:#80b0da;
#color:#ffffff;
#text-decoration:none;
#}
#
#/**************** Content styles ****************/
#
##content{
#float:left;
#text-align:justify;
#width: 95%; /* 1030px; */
#font-size:0.9em;
#padding:20px 0 0 20px;
#}
#
##content h2{
#display:block;
#margin:0 0 16px 0;
#font-size:1.7em;
#font-weight:normal;
#letter-spacing:-1px;
#color:#505050;
#background-color:inherit;
#}
#
##content h2 a{font-weight:normal;}
##content h3{margin:0 0 5px 0; font-size:1.4em; letter-spacing:-1px;}
##content a:hover,#subcontent a:hover{text-decoration:underline;}
##content ul,#content ol{margin:0 5px 16px 35px;}
##content dl{margin:0 5px 10px 25px;}
##content dt{font-weight:bold; margin-bottom:5px;}
##content dd{margin:0 0 10px 15px;}
#
#/**************** Sidebar styles ****************/
#
##subcontent{
#float:right;
#width:170px;
#padding:20px 20px 10px 0;
#line-height:1.4em;
#}
#
##subcontent h2{
#display:block;
#margin:0 0 15px 0;
#font-size:1.6em;
#font-weight:normal;
#text-align:left;
#letter-spacing:-1px;
#color:#505050;
#background-color:inherit;
#}
#
##subcontent p{margin:0 0 16px 0; font-size:0.9em;}
#
#/**************** Menublock styles ****************/
#
#.menublock{margin:0 0 20px 8px; font-size:0.9em;}
#.menublock li{list-style:none; display:block; padding:2px; margin-bottom:2px;}
#.menublock li a{font-weight:bold; text-decoration:none;}
#.menublock li a:hover{text-decoration:none;}
#.menublock li ul{margin:3px 0 3px 15px; font-size:1em; font-weight:normal;}
#.menublock li ul li{margin-bottom:0;}
#.menublock li ul a{font-weight:normal;}
#
#/**************** Searchbar styles ****************/
#
##searchbar{margin:0 0 20px 0;}
##searchbar form fieldset{margin-left:10px; border:0 solid;}
#
##searchbar #s{
#height:1.2em;
#width:110px;
#margin:0 5px 0 0;
#border:1px solid #a0a0a0;
#}
#
##searchbar #searchbutton{
#width:auto;
#padding:0 1px;
#border:1px solid #808080;
#font-size:0.9em;
#text-align:center;
#}
#
#/**************** Footer styles ****************/
#
##footer{
#clear:both;
#width:1258px;
#padding:5px 0;
#margin:0 1px;
#font-size:0.9em;
#color:#f0f0f0;
#background:#467aa7;
#}
#
##footer p{padding:0; margin:0; text-align:center;}
##footer a{color:#f0f0f0; background-color:inherit; font-weight:bold;}
##footer a:hover{color:#ffffff; background-color:inherit; text-decoration: underline;}
#
#/**************** Misc classes and styles ****************/
#
#.splitcontentleft{float:left; width:48%;}
#.splitcontentright{float:right; width:48%;}
#.clear{clear:both;}
#.small{font-size:0.8em;}
#.hide{display:none;}
#.textcenter{text-align:center;}
#.textright{text-align:right;}
#.important{color:#f02025; background-color:inherit; font-weight:bold;}
#
#.box{
#margin:0 0 20px 0;
#padding:10px;
#border:1px solid #c0c0c0;
#background-color:#fafbfc;
#color:#505050;
#line-height:1.5em;
#}
#
#
#.snippet {
#  
#    background: #f9f9f9;
#      border-left: 10px solid #ccc;
#        margin: 1.5em 0px;
#          padding: 0.5em 10px;
#            quotes: "\201C""\201D""\2018""\2019";
#            }
#            .snippet :before {
#              color: #ccc;
#                
#                  font-size: 4em;
#                    line-height: 0.1em;
#                      margin-right: 0.25em;
#                        vertical-align: -0.4em;
#                        }
#                        .snippet:after {
#                          color: #ccc;
#
#                            font-size: 4em;
#                              line-height: 0.1em;
#                                margin-left: 0.25em;
#                                  vertical-align: -0.4em;
#                                  }
#                                  .snippet p {
#                                    display: inline;
#                                    }
#
#                                    blockquote {
#
#                                      background: #f9f9f9;
#                                        border-left: 10px solid #ccc;
#                                          margin: 1.5em 0px;
#                                            padding: 0.5em 10px;
#                                              quotes: "\201C""\201D""\2018""\2019";
#                                              }
#                                              blockquote:before {
#                                                font-family: "Times New Roman",serif;
#                                                  color: #ccc;
#                                                    content: open-quote;
#                                                      font-size: 4em;
#                                                        line-height: 0.1em;
#                                                          margin-right: 0.25em;
#                                                            vertical-align: -0.4em;
#                                                            }
#                                                            blockquote:after {
#                                                              font-family: "Times New Roman",serif;
#                                                                color: #ccc;
#                                                                  content: close-quote;
#                                                                    font-size: 4em;
#                                                                      line-height: 0.1em;
#                                                                        margin-left: 0.25em;
#                                                                          vertical-align: -0.4em;
#                                                                          }
#                                                                          blockquote p {
#                                                                            display: inline;
#                                                                            }
#
#                                                                            table a:link {
#                                                                              color: green;
#                                                                                /* font-weight: bold; */
#                                                                                  text-decoration:underline;
#                                                                                  }
#                                                                                  table a:visited {
#                                                                                    color: green;
#                                                                                      /* font-weight:bold; */
#                                                                                        text-decoration:underline;
#                                                                                        }
#                                                                                        table a:active,
#                                                                                        table a:hover {
#                                                                                          color: lime;
#                                                                                            text-decoration:underline;
#                                                                                            }
#                                                                                            table {
#                                                                                              width:100%;
#                                                                                                table-layout: fixed;
#                                                                                                  font-family:Verdana, sans-serif;
#                                                                                                    color:#666;
#                                                                                                      /* font-size:12px; */
#                                                                                                        /* text-shadow: 1px 1px 0px #fff; */
#                                                                                                          background:#eaebec;
#                                                                                                            /* margin:20px; */
#                                                                                                              border:#ccc 1px solid;
#
#                                                                                                                -moz-border-radius:3px;
#                                                                                                                  -webkit-border-radius:3px;
#                                                                                                                    border-radius:3px;
#
#                                                                                                                     /*  -moz-box-shadow: 0 1px 2px #d1d1d1;
#                                                                                                                       -webkit-box-shadow: 0 1px 2px #d1d1d1;
#                                                                                                                         box-shadow: 0 1px 2px #d1d1d1; */
#                                                                                                                         }
#                                                                                                                         table th {
#                                                                                                                           /* padding:21px 25px 22px 25px; */
#                                                                                                                             border-top:1px solid #fafafa;
#                                                                                                                               border-bottom:1px solid #e0e0e0;
#                                                                                                                                 font-weight: normal;
#                                                                                                                                   /*font-weight: 550; */
#                                                                                                                                     /* background: #ededed; 
#                                                                                                                                       background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
#                                                                                                                                         background: -moz-linear-gradient(top,  #ededed,  #ebebeb);*/
#                                                                                                                                         }
#                                                                                                                                         table th:first-child {
#                                                                                                                                           text-align: left;
#                                                                                                                                             /* padding-left:20px; */
#                                                                                                                                             }
#                                                                                                                                             table tr:first-child th:first-child {
#                                                                                                                                               -moz-border-radius-topleft:3px;
#                                                                                                                                                 -webkit-border-top-left-radius:3px;
#                                                                                                                                                   border-top-left-radius:3px;
#                                                                                                                                                   }
#                                                                                                                                                   table tr:first-child th:last-child {
#                                                                                                                                                     -moz-border-radius-topright:3px;
#                                                                                                                                                       -webkit-border-top-right-radius:3px;
#                                                                                                                                                         border-top-right-radius:3px;
#                                                                                                                                                         }
#                                                                                                                                                         table tr {
#                                                                                                                                                           text-align: left;
#                                                                                                                                                             /* padding-left:20px; */
#                                                                                                                                                             }
#                                                                                                                                                             table td:first-child {
#                                                                                                                                                               text-align: left;
#                                                                                                                                                                 /* padding-left:20px; */
#                                                                                                                                                                   border-left: 0;
#                                                                                                                                                                   }
#                                                                                                                                                                   table td {
#                                                                                                                                                                     /* padding:18px; */
#                                                                                                                                                                       border-top: 1px solid #ffffff;
#                                                                                                                                                                         border-bottom:1px solid #e0e0e0;
#                                                                                                                                                                           border-left: 1px solid #e0e0e0;
#
#                                                                                                                                                                             background: #fafafa;
#                                                                                                                                                                               /* background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
#                                                                                                                                                                                 background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);*/
#                                                                                                                                                                                 }
#                                                                                                                                                                                 table tr.even td {
#                                                                                                                                                                                   background: #f6f6f6;
#                                                                                                                                                                                     /* background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
#                                                                                                                                                                                       background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6); */
#                                                                                                                                                                                       }
#                                                                                                                                                                                       table tr:last-child td {
#                                                                                                                                                                                         border-bottom:0;
#                                                                                                                                                                                         }
#                                                                                                                                                                                         table tr:last-child td:first-child {
#                                                                                                                                                                                           -moz-border-radius-bottomleft:3px;
#                                                                                                                                                                                             -webkit-border-bottom-left-radius:3px;
#                                                                                                                                                                                               border-bottom-left-radius:3px;
#                                                                                                                                                                                               }
#                                                                                                                                                                                               table tr:last-child td:last-child {
#                                                                                                                                                                                                 -moz-border-radius-bottomright:3px;
#                                                                                                                                                                                                   -webkit-border-bottom-right-radius:3px;
#                                                                                                                                                                                                     border-bottom-right-radius:3px;
#                                                                                                                                                                                                     }
#                                                                                                                                                                                                     /* table tr:hover td {
#                                                                                                                                                                                                       background: #f2f2f2;
#                                                                                                                                                                                                         background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
#                                                                                                                                                                                                           background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);  
#                                                                                                                                                                                                           } */
#                                                                                                                                                                                                           </style>
#                                                                                                                                                                                                           </head>
#
#                                                                                                                                                                                                           <body>
#                                                                                                                                                                                                           <div id="container"><div id="header">
#
#
#                                                                                                                                                                                                           		
#                                                                                                                                                                                                           					
#                                                                                                                                                                                                           								<h1>James T</h1>
#                                                                                                                                                                                                           								<h2>Welcome to my Home Page</h2>
#                                                                                                                                                                                                           								</div>
#
#                                                                                                                                                                                                           								<div id="navigation">
#                                                                                                                                                                                                           								<ul>
#                                                                                                                                                                                                           								<li class="selected"><a href="#">First page</a></li>
#                                                                                                                                                                                                           								<li><a href="#">Second</a></li>
#                                                                                                                                                                                                           								<li><a href="#">Third</a></li>
#                                                                                                                                                                                                           								<li><a href="#">Fourth</a></li>
#                                                                                                                                                                                                           								<li><a href="#">Fifth</a></li>
#                                                                                                                                                                                                           								<li><a href="#">And the last one</a></li>
#                                                                                                                                                                                                           								</ul>
#                                                                                                                                                                                                           								</div>
#
#                                                                                                                                                                                                           								<div id="content">
#                                                                                                                                                                                                           								<h2>Welcome To Andreas08!</h2>
#



