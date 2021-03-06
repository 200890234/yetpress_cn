@include('admin.inc.assets')
<?php 
	function checked($value,$compare){
		echo $value==$compare?"checked='checked'":'';
	}
 ?>
<p>位置： 系统参数设置</p>
				<div class="col_note">
					<ul>
						<li>操作选项：<a href="{{ url('admin/postTemp/tb/aritcle_others/type/dictData/act/add') }}">增加信息</a></li>
						<li>
							<form action="">
								<input type="text" class="input400" placeholder="输入关键字" name="skey" id="skey">
								<input type="submit" class="sbtn submits" value="搜索">
							</form>
						</li>
						<li id="qucikitems">
							[<a href="">数据更新</a>]
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="main_body">
					<ul class="body_menutab">
						<li>基本设置</li>
						<li>用户设置</li>
						<li>文件设置</li>
						<li>搜索设置</li>
						<li>信息设置</li>
						<li>Ftp/Email</li>
						<li>图片设置</li>
					</ul>
					<div class="clear"></div>
						<form action="{{ url('admin/setConf/') }}/{{$id=$data->config_id}}" method="post" id="sysconf">
							{!! csrf_field() !!}
							{!! method_field('PUT') !!}
							<?php 
								$errorinfo=$errors->sysconfig->messages();
								$errinfo=[];
								// echo $errorinfo['attach_dir'][0]; //$errorinfo 明明是数组为什么不能取出值呢？ 目前只能循环成新数组了
								foreach ($errorinfo as $k => $v) {
									$errinfo[$k]=$v[0];//新的错误信息数组
								}
								$errjson=json_encode($errinfo);//转换json 易于js处理
							 ?>
							<div class="tab_content">
								<div class="wrap_post">
									<!-- <div class="post_note">
										<input type="submit" class="subm_btns" value="提交">
										<input type="reset" class="subm_btns" value="重置">
									</div> -->
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<!-- <tr>
												<td colspan="2" style="height:auto;">
													<span class="error">{{session('msg')}}</span>
												</td>
											</tr> -->
											<script>
												$(function(){
													// layer.tips('只想提示地精准些', '#sitename',{tipsMore: true,time:0}); //tips功能
													var errdata=eval('('+'<?php echo $errjson ?>'+')');
													for(i in errdata){
														var ele="#"+i;
														layer.tips(errdata[i], ele,{tipsMore: true,time:0}); //tips功能
													}
												})
												if("{{session('msg')}}"){
													// layer.msg("{{session('msg')}}");//最简单形式
													layer.msg("{{session('msg')}}",{
														shade: 0.3,
														shadeClose:true,
												        time:1200
												    });
												}
											</script>
											<tr>
												<td class="post_r">站点名称：</td>
												<td>
													<input type="text" class="input600" name="sitename" id="sitename" value="{{$data->config_sitename}}">
												</td>
											</tr>
											<tr>
												<td class="post_r">网站地址：</td>
												<td>
													<input type="text" class="input600" name="sitepath" id="sitepath" value="{{$data->config_sitepath}}">
												</td>
											</tr>
											<tr>
												<td class="post_r">附件地址：</td>
												<td>
													<input type="text" class="input600" name="attach_dir" id="attach_dir" value="{{$data->config_attach_dir}}">
												</td>
											</tr>
											<tr>
												<td class="post_r">管理员邮箱：</td>
												<td>
													<input type="text" class="input600" name="email" id="email" value="{{$data->config_email}}">
												</td>
											</tr>
											<tr>
												<td class="post_r">网站关键字：</td>
												<td>
													<input type="text" class="input600" name="keywords" id="keywords" value="{{$data->config_keywords}}">
												</td>
											</tr>
											<tr>
												<td class="post_r">网站简介：</td>
												<td><textarea name="description" id="description" cols="18" rows="2">{{$data->config_description}}</textarea></td>
											</tr>
											<tr>
												<td class="post_r">首页模式：</td>
												<td id="index_pattern">
													<input type="radio" name="index_pattern" id="index_pattern1" class="r_dio" value="0" {{checked($data->config_index_pattern,0)}}>
													<label for="index_pattern1"></label>&nbsp;静态首页&nbsp;&nbsp;
													<input type="radio" name="index_pattern" id="index_pattern2" class="r_dio" value="1" {{checked($data->config_index_pattern,1)}}>
													<label for="index_pattern2"></label>&nbsp;动态首页
												</td>
											</tr>
											<tr>
												<td class="post_r">首页文件扩展名：</td>
												<td>
													<input type="text" class="input400" name="index_extension" id="index_extension" value="{{$data->config_index_extension}}">
													<select id="preset_ext">
														<option value=".html">扩展名</option>
														<option value=".html">.html</option>
														<option value=".php">.php</option>
														<option value=".htm">.htm</option>
														<option value=".shtml">.shtml</option>
													</select>
												</td>
											</tr>
											<tr>
												<td class="post_r">PHP超时时间设置：</td>
												<td>
													<input type="text" class="input400" name="php_timeout" id="php_timeout" value="{{$data->config_php_timeout}}">&nbsp;秒(一般不需要设置)
												</td>
											</tr>
										</tbody>
									</table>
									<div class="blank10"></div>
								</div>
								{!! csrf_field() !!}
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">后台登陆验证码：</td>
												<td id="admincaptcha_enabled">
													<input type="radio" name="admincaptcha_enabled" id="admincaptcha_enabled1" class="r_dio" value="0" {{checked($data->config_admincaptcha_enabled,0)}}>
													<label for="admincaptcha_enabled1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="admincaptcha_enabled" id="admincaptcha_enabled2" class="r_dio" value="1" {{checked($data->config_admincaptcha_enabled,1)}}>
													<label for="admincaptcha_enabled2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">会员注册：</td>
												<td id="allow_register">
													<input type="radio" name="allow_register" id="allow_register1" class="r_dio" value="0" {{checked($data->config_allow_register,0)}}>
													<label for="allow_register1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="allow_register" id="allow_register2" class="r_dio" value="1" {{checked($data->config_allow_register,1)}}>
													<label for="allow_register2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">注册赠送点数：</td>
												<td>
													<input type="text" class="input400" name="register_score" id="register_score" value="{{$data->config_register_score}}">
												</td>
											</tr>
											<tr>
												<td class="post_r">注册用户名限制：</td>
												<td>
													<input type="text" class="input40" name="reguser_minlength" id="reguser_minlength" value="{{$data->config_reguser_minlength}}">
													~
													<input type="text" class="input40" name="reguser_maxlength" id="reguser_maxlength" value="{{$data->config_reguser_maxlength}}">
													&nbsp;个字节
												</td>
											</tr>
											<tr>
												<td class="post_r">注册密码限制：</td>
												<td>
													<input type="text" class="input40" name="regpass_minlength" id="regpass_minlength" value="{{$data->config_regpass_minlength}}">
													~
													<input type="text" class="input40" name="regpass_maxlength" id="regpass_maxlength" value="{{$data->config_regpass_maxlength}}">
													&nbsp;个字节
												</td>
											</tr>
											<tr>
												<td class="post_r">用户名保留关键字：</td>
												<td>
													<input type="text" class="input300" name="register_syskey" id="register_syskey" value="{{$data->config_register_syskey}}">&nbsp; (禁止包含字符,多个用"|"号隔开,支持多字验证)
												</td>
											</tr>
											<tr>
												<td class="post_r">投稿功能：</td>
												<td id="allow_contribution">
													<input type="radio" name="allow_contribution" id="allow_contribution1" class="r_dio" value="0" {{checked($data->config_allow_contribution,0)}}>
													<label for="allow_contribution1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="allow_contribution" id="allow_contribution2" class="r_dio" value="1" {{checked($data->config_allow_contribution,1)}}>
													<label for="allow_contribution2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">会员登陆验证码：</td>
												<td id="usercaptcha_enabled">
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled1" class="r_dio" value="0" {{checked($data->config_usercaptcha_enabled,0)}}>
													<label for="usercaptcha_enabled1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled2" class="r_dio" value="1" {{checked($data->config_usercaptcha_enabled,1)}}>
													<label for="usercaptcha_enabled2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">会员注册审核方式：</td>
												<td id="register_activatetype">
													<input type="radio" name="register_activatetype" id="register_activatetype1" class="r_dio" value="0" {{checked($data->config_register_activatetype,0)}}>
													<label for="register_activatetype1"></label>&nbsp;无&nbsp;&nbsp;
													<input type="radio" name="register_activatetype" id="register_activatetype2" class="r_dio" value="1" {{checked($data->config_register_activatetype,1)}}>
													<label for="register_activatetype2"></label>&nbsp;邮件激活 
												</td>
											</tr>
										</tbody>
									</table>
									<div class="blank10"></div>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">附件存放目录：</td>
												<td id="attach_dirset">
													<input type="radio" name="attach_dirset" id="attach_dirset1" class="r_dio" value="0" {{checked($data->config_attach_dirset,0)}}>
													<label for="attach_dirset1"></label>&nbsp;栏目目录&nbsp;&nbsp;
													<input type="radio" name="attach_dirset" id="attach_dirset2" class="r_dio" value="1" {{checked($data->config_attach_dirset,1)}}>
													<label for="attach_dirset2"></label>&nbsp;/d/file/p目录&nbsp;
													<input type="radio" name="attach_dirset" id="attach_dirset3" class="r_dio" value="2" {{checked($data->config_attach_dirset,2)}}>
													<label for="attach_dirset3"></label>&nbsp;/d/file目录&nbsp;
												</td>
											</tr>
											<tr>
												<td class="post_r">附件存放日期目录：</td>
												<td>
													<input type="text" class="input300" name="attach_datedir" id="attach_datedir" value="{{$data->config_attach_datedir}}">
													&nbsp;
													<select id="datedir">
														<option value="Y-m-d">请选择</option>
										                <option value="Y-m-d">2005-01-27</option>
										                <option value="Y/m-d">2005/01-27</option>
										                <option value="Y/m/d">2005/01/27</option>
										                <option value="Ymd">20050127</option>
													</select>(如Y-m-d，Y/m-d，Y/m/d，Ymd等形式)
												</td>
											</tr>
											<tr>
												<td class="post_r">后台上传附件大小：</td>
												<td>
													<input type="text" class="input300" name="allowed_filesize" id="allowed_filesize" value="{{$data->config_allowed_filesize}}">&nbsp;&nbsp;&nbsp;KB
												</td>
											</tr>
											<tr>
												<td class="post_r">后台上传文件扩展名：</td>
												<td>
													<input type="text" class="input300" name="allowed_filetype" id="allowed_filetype" value="{{$data->config_allowed_filetype}}">&nbsp;&nbsp;(多个请用“|”格开，如：.gif|.jpg)
												</td>
											</tr>
											<tr>
												<td class="post_r">前台投稿附件设置：</td>
												<td>
													<input type="checkbox" class="c_box" hid="contribution_imgup" id="contribution_imgup1" {{checked($data->config_contribution_imgup,1)}}>
													<label for="contribution_imgup1" style="top:4px;"></label>
													<input type="hidden" class="boxdata" name="contribution_imgup" id="contribution_imgup" value="{{$data->config_contribution_imgup}}">
													开启上传图片,最大图片：<input type="text" class="input300" name="contribution_imgupsize" id="contribution_imgupsize" value="{{$data->config_contribution_imgupsize}}">&nbsp;KB
													<div class="blank5"></div>
													图片扩展名：<input type="text" class="input400" name="contribution_imguptype" id="contribution_imguptype" value="{{$data->config_contribution_imguptype}}">&nbsp;(多个用"|"格开)
													<div class="blank5"></div>
													<input type="checkbox" class="c_box" hid="contribution_fileup" id="contribution_fileup2" {{checked($data->config_contribution_fileup,1)}}>
													<label for="contribution_fileup2" style="top:4px;"></label>
													<input type="hidden" class="boxdata" name="contribution_fileup" id="contribution_fileup" value="{{$data->config_contribution_fileup}}">
													开启上传附件,最大附件：<input type="text" class="input300" name="contribution_fileupsize" id="contribution_fileupsize" value="{{$data->config_contribution_fileupsize}}">&nbsp;KB
													<div class="blank5"></div>
													附件扩展名：<input type="text" class="input400" name="contribution_fileuptype" id="contribution_fileuptype" value="{{$data->config_contribution_fileuptype}}">&nbsp;(多个用"|"格开)
												</td>
											</tr>
											<tr>
												<td class="post_r">数据备份存放目录：</td>
												<td>
													<input type="text" class="input300" name="bak_dir" id="bak_dir" value="{{$data->config_bak_dir}}">
												</td>
											</tr>
											<tr>
												<td class="post_r">压缩包存放目录：</td>
												<td>
													<input type="text" class="input300" name="bak_zipdir" id="bak_zipdir" value="{{$data->config_bak_zipdir}}">
												</td>
											</tr>
											<tr>
												<td class="post_r">支持MYSQL查询方式：</td>
												<td>
													<input type="checkbox" class="c_box" hid="bak_mysql" id="bak_mysql1" {{checked($data->config_bak_mysql,1)}}>
													<label for="bak_mysql1" style="top:4px;"></label>&nbsp;支持
													<input type="hidden" class="boxdata" name="bak_mysql" id="bak_mysql" value="{{$data->config_bak_mysql}}">
												</td>
											</tr>
										</tbody>
									</table>
									<div class="blank10"></div>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">搜索关键字长度限制：</td>
												<td>
													<input type="text" class="input40" name="search_minlength" id="search_minlength" value="{{$data->config_search_minlength}}">
													~
													<input type="text" class="input40" name="search_maxlength" id="search_maxlength" value="{{$data->config_search_maxlength}}">
													&nbsp;个字符之间
												</td>
											</tr>
											<tr>
												<td class="post_r">搜索时间间隔：</td>
												<td>
													<input type="text" class="input400" name="search_interval" id="search_interval" value="{{$data->config_search_interval}}">
													&nbsp;秒
												</td>
											</tr>
											<tr>
												<td class="post_r">页面显示：</td>
												<td>
													每页显示&nbsp;<input type="text" class="input40" name="search_perpage" id="search_perpage" value="{{$data->config_search_perpage}}">&nbsp;条记录，
													<input type="text" class="input40" name="search_linksize" id="search_linksize" value="{{$data->config_search_linksize}}">&nbsp;个分页链接
												</td>
											</tr>
										</tbody>
									</table>
									<div class="blank10"></div>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">所在位置导航分隔字符：</td>
												<td>
													<input type="text" class="input400" name="pagenav_delimiter" id="pagenav_delimiter" value="{{$data->config_pagenav_delimiter}}">
													&nbsp;秒
												</td>
											</tr>
											<tr>
												<td class="post_r">信息简介截取：</td>
												<td>
													<input type="text" class="input400" name="intro_length" id="intro_length" value="{{$data->config_intro_length}}">
													&nbsp;秒
												</td>
											</tr>
											<tr>
												<td class="post_r">相关链接依据：</td>
												<td>
													<select id="relate_rule">
														<option value="0" selected="">标题包含关键字</option>
														<option value="1">关键字相同</option>
														<option value="2">标题包含与关键字相同</option>
													</select>
												</td>
											</tr>
											<tr>
												<td class="post_r">列表分页函数(下拉)：</td>
												<td>
													<input type="text" class="input400" name="listpager_dropdownfunc" id="listpager_dropdownfunc" value="{{$data->config_listpager_dropdownfunc}}">
												</td>
											</tr>
											<tr>
												<td class="post_r">列表分页函数(列表)：</td>
												<td>
													<input type="text" class="input300" name="listpager_listfunc" id="listpager_listfunc" value="{{$data->config_listpager_listfunc}}">
													每页显示<input type="text" class="input40" name="listpager_linksize" id="listpager_linksize" value="{{$data->config_listpager_linksize}}">&nbsp;个页码
												</td>
											</tr>
											<tr>
												<td class="post_r">内容分页函数：</td>
												<td>
													<input type="text" class="input400" name="article_pagerfunc" id="article_pagerfunc" value="{{$data->config_article_pagerfunc}}">
												</td>
											</tr>
										</tbody>
									</table>
									<div class="blank10"></div>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">邮件发送模式：</td>
												<td id="email_sendtype">
													<input type="radio" name="email_sendtype" id="email_sendtype1" class="r_dio" value="0" {{checked($data->config_email_sendtype,0)}}>
													<label for="email_sendtype1"></label>&nbsp;mail 函数发送 &nbsp;&nbsp;
													<input type="radio" name="email_sendtype" id="email_sendtype2" class="r_dio" value="1" {{checked($data->config_email_sendtype,1)}}>
													<label for="email_sendtype2"></label>&nbsp; SMTP 模块发送
												</td>
											</tr>
											<tr>
												<td class="post_r"><b>SMTP 模块发送设置：</b></td>
												<td class="post_r"></td>
											</tr>
											<tr>
												<td class="post_r">SMTP服务器：</td>
												<td><input type="text" class="input400" name="email_smtphost" id="email_smtphost" value="{{$data->config_email_smtphost}}"></td>
											</tr>
											<tr>
												<td class="post_r">SMTP端口：</td>
												<td><input type="text" class="input400" name="email_smtpport" id="email_smtpport" value="{{$data->config_email_smtpport}}"></td>
											</tr>
											<tr>
												<td class="post_r">邮箱SMTP发信人呢称：</td>
												<td><input type="text" class="input400" name="email_stmpnickname" id="email_stmpnickname" value="{{$data->config_email_stmpnickname}}"></td>
											</tr>
											<tr>
												<td class="post_r">是否需要登录验证：</td>
												<td id="email_smtplogincheck">
													<input type="radio" name="email_smtplogincheck" id="email_smtplogincheck1" class="r_dio" value="0" {{checked($data->config_email_smtplogincheck,0)}}>
													<label for="email_smtplogincheck1"></label>&nbsp;否 &nbsp;&nbsp;
													<input type="radio" name="email_smtplogincheck" id="email_smtplogincheck2" class="r_dio" value="1" {{checked($data->config_email_smtplogincheck,1)}}>
													<label for="email_smtplogincheck2"></label>&nbsp;是
												</td>
											</tr>
											<tr>
												<td class="post_r">邮箱登录用户名：</td>
												<td><input type="text" class="input400" name="email_smtpusername" id="email_smtpusername" value="{{$data->config_email_smtpusername}}"></td>
											</tr>
											<tr>
												<td class="post_r">邮箱登录密码：</td>
												<td><input type="password" class="input400" name="email_smtpuserpass" id="email_smtpuserpass" value="{{$data->config_email_smtpuserpass}}"></td>
											</tr>
										</tbody>
									</table>
									<div class="blank10"></div>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r"><b>图片缩略图设置：</b></td>
												<td class="post_r"></td>
											</tr>
											<tr>
												<td class="post_r">默认值：</td>
												<td> 
													宽：&nbsp;<input type="text" class="input40" name="thumbnail_width" id="thumbnail_width" value="{{$data->config_thumbnail_width}}">&nbsp;×高: <input type="text" class="input40" name="thumbnail_height" id="thumbnail_height" value="{{$data->config_thumbnail_height}}">
												</td>
											</tr>
											<tr style="border-bottom: 1px solid #87DFBA;height: 35px;">
												<td class="post_r">超出部分是否截取：</td>
												<td id="thumbnail_crop">
													<input type="radio" name="thumbnail_crop" id="thumbnail_crop1" class="r_dio" value="0" {{checked($data->config_thumbnail_crop,0)}}>
													<label for="thumbnail_crop1"></label>&nbsp;否 &nbsp;&nbsp;
													<input type="radio" name="thumbnail_crop" id="thumbnail_crop2" class="r_dio" value="1" {{checked($data->config_thumbnail_crop,1)}}>
													<label for="thumbnail_crop2"></label>&nbsp;是
												</td>
											</tr>
											<tr>
												<td class="post_r"><b>图片水印设置：</b></td>
												<td class="post_r"></td>
											</tr>
											<tr>
												<td class="post_r">水印位置：</td>
												<td> 
													<table width="400" border="0" cellpadding="6" cellspacing="1">
											            <tbody>
															<tr id="watermark_position">
																<td rowspan="3">
																	<div align="center">
																		<input type="radio" name="watermark_position" id="watermark_position1" class="r_dio" value="0" {{checked($data->config_watermark_position,0)}}><label for="watermark_position1"></label>
																		<br>
																		随机 
																	</div>
																</td>
																<td>
																	<div align="center"><input type="radio" name="watermark_position" id="watermark_position2" class="r_dio" value="1" {{checked($data->config_watermark_position,1)}}><label for="watermark_position2"></label></div>
																</td>
																<td>
																	<div align="center"><input type="radio" name="watermark_position" id="watermark_position3" class="r_dio" value="2" {{checked($data->config_watermark_position,2)}}><label for="watermark_position3"></label></div>
																</td>
																<td>
																	<div align="center"><input type="radio" name="watermark_position" id="watermark_position4" class="r_dio" value="3" {{checked($data->config_watermark_position,3)}}><label for="watermark_position4"></label></div>
																</td>
															</tr>
															<tr>
																<td>
																	<div align="center"><input type="radio" name="watermark_position" id="watermark_position5" class="r_dio" value="4" {{checked($data->config_watermark_position,4)}}><label for="watermark_position5"></label></div>
																</td>
																<td>
																	<div align="center"><input type="radio" name="watermark_position" id="watermark_position6" class="r_dio" value="5" {{checked($data->config_watermark_position,5)}}><label for="watermark_position6"></label></div>
																</td>
																<td>
																	<div align="center"><input type="radio" name="watermark_position" id="watermark_position7" class="r_dio" value="6" {{checked($data->config_watermark_position,6)}}><label for="watermark_position7"></label></div>
																</td>
															</tr>
															<tr>
																<td>
																	<div align="center"><input type="radio" name="watermark_position" id="watermark_position8" class="r_dio" value="7" {{checked($data->config_watermark_position,7)}}><label for="watermark_position8"></label></div>
																</td>
																<td>
																	<div align="center"><input type="radio" name="watermark_position" id="watermark_position9" class="r_dio" value="8" {{checked($data->config_watermark_position,8)}}><label for="watermark_position9"></label></div>
																</td>
																<td>
																	<div align="center"><input type="radio" name="watermark_position" id="watermark_position10" class="r_dio" value="9" {{checked($data->config_watermark_position,9)}}><label for="watermark_position10"></label></div>
																</td>
															</tr>
											            </tbody>
											        </table>
												</td>
											</tr>
											<tr>
												<td class="post_r">文字水印：</td>
												<td>
													文字内容&nbsp;<input type="text" class="input400" name="watermark_text" id="watermark_text" value="{{$data->config_watermark_text}}">&nbsp;(目前不支持中文)
													<div class="blank5"></div><div class="blank5"></div>
													文字颜色&nbsp;<input type="text" class="input80" name="watermark_fontcolor" id="watermark_fontcolor" value="{{$data->config_watermark_fontcolor}}">&nbsp;
													文字大小&nbsp;<input type="text" class="input40" name="watermark_fontsize" id="watermark_fontsize" value="{{$data->config_watermark_fontsize}}">&nbsp;(1~5之间的数字)
												</td>
											</tr>
											<tr>
												<td class="post_r">图片水印：</td>
												<td>
													图片文件&nbsp;<input type="text" class="input400" name="watermark_imgpath" id="watermark_imgpath" value="{{$data->config_watermark_imgpath}}">&nbsp;(从xxx开始算，如..)
													<div class="blank5"></div><div class="blank5"></div>
													图片质量&nbsp;<input type="text" class="input40" name="watermark_quality" id="watermark_quality" value="{{$data->config_watermark_quality}}">&nbsp;(该值决定 jpg 格式图片的质量，范围从 0 到 100)
													<div class="blank5"></div><div class="blank5"></div>
													水印透明度&nbsp;<input type="text" class="input40" name="watermark_opactiy" id="watermark_opactiy" value="{{$data->config_watermark_opactiy}}">&nbsp;(该值决定图片水印清晰度，其值范围从 0 到 100)
												</td>
											</tr>
										</tbody>
									</table>
									<div class="blank10"></div>
								</div>
							</div>
							<div class="post_action">
								<input type="submit" class="subm_btns" value="提交">
								<input type="reset" class="subm_btns" value="重置">
							</div>
					</form>
					<div class="blank50"></div>
					<div class="blank10"></div>
					<div class="blank5"></div>
				</div>
<script>
	$(function(){
		function sel_set(el,el_set){//设置select选择切换事件
			el.change(function() {
				var v=$(this).find("option:selected").val();
				el_set.val(v);
			});
		}
		sel_set($('#preset_ext'),$('#index_extension'));
		sel_set($('#datedir'),$('#attach_datedir'));
		$(".c_box").click(function() {//checkbox选择时的val变化
			// alert($(this).val());
			var ck=$(this).prop("checked");//点击以后的结果 false or true
			var hid="#"+$(this).attr('hid');
			if(!ck){
				$(hid).val(0);
			}else{
				$(hid).val(1);
			}
		});
	})
</script>