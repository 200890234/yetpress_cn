@include('admin.inc.assets')
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
						<form action="{{ url('admin/doPostTemp') }}" method="post" id="sysconf">
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
													<span class="error"></span>
												</td>
											</tr> -->
											<tr>
												<td class="post_r">站点名称：</td>
												<td>
													<input type="text" class="input600" name="sitename" id="sitename" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">网站地址：</td>
												<td>
													<input type="text" class="input600" name="sitepath" id="sitepath" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">附件地址：</td>
												<td>
													<input type="text" class="input600" name="attach_dir" id="attach_dir" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">管理员邮箱：</td>
												<td>
													<input type="text" class="input600" name="email" id="email" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">网站关键字：</td>
												<td>
													<input type="text" class="input600" name="keywords" id="keywords" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">网站简介：</td>
												<td><textarea name="description" id="description" cols="18" rows="2"></textarea></td>
											</tr>
											<tr>
												<td class="post_r">首页模式：</td>
												<td id="index_pattern">
													<input type="radio" name="index_pattern" id="index_pattern1" class="r_dio" value="0">
													<label for="index_pattern1"></label>&nbsp;静态首页&nbsp;&nbsp;
													<input type="radio" name="index_pattern" id="index_pattern2" class="r_dio" value="1">
													<label for="index_pattern2"></label>&nbsp;动态首页
												</td>
											</tr>
											<tr>
												<td class="post_r">首页文件扩展名：</td>
												<td>
													<input type="text" class="input400" name="index_extension" id="index_extension" value="">
													<select name="preset_ext" id="preset_ext">
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
													<input type="text" class="input400" name="php_timeout" id="php_timeout" value="">&nbsp;秒(一般不需要设置)
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
													<input type="radio" name="admincaptcha_enabled" id="admincaptcha_enabled1" class="r_dio" value="0">
													<label for="admincaptcha_enabled1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="admincaptcha_enabled" id="admincaptcha_enabled2" class="r_dio" value="1">
													<label for="admincaptcha_enabled2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">会员注册：</td>
												<td id="allow_register">
													<input type="radio" name="allow_register" id="allow_register1" class="r_dio" value="0">
													<label for="allow_register1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="allow_register" id="allow_register2" class="r_dio" value="1">
													<label for="allow_register2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">注册赠送点数：</td>
												<td>
													<input type="text" class="input400" name="register_score" id="register_score" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">注册用户名限制：</td>
												<td>
													<input type="text" class="input40" name="reguser_minlength" id="reguser_minlength" value="">
													~
													<input type="text" class="input40" name="reguser_maxlength" id="reguser_maxlength" value="">
													&nbsp;个字节
												</td>
											</tr>
											<tr>
												<td class="post_r">注册密码限制：</td>
												<td>
													<input type="text" class="input40" name="regpass_minlength" id="regpass_minlength" value="">
													~
													<input type="text" class="input40" name="regpass_maxlength" id="regpass_maxlength" value="">
													&nbsp;个字节
												</td>
											</tr>
											<tr>
												<td class="post_r">用户名保留关键字：</td>
												<td>
													<input type="text" class="input300" name="register_syskey" id="register_syskey" value="">&nbsp; (禁止包含字符,多个用"|"号隔开,支持多字验证)
												</td>
											</tr>
											<tr>
												<td class="post_r">投稿功能：</td>
												<td id="allow_contribution">
													<input type="radio" name="allow_contribution" id="allow_contribution1" class="r_dio" value="0">
													<label for="allow_contribution1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="allow_contribution" id="allow_contribution2" class="r_dio" value="1">
													<label for="allow_contribution2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">会员登陆验证码：</td>
												<td id="usercaptcha_enabled">
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled1" class="r_dio" value="0">
													<label for="usercaptcha_enabled1"></label>&nbsp;关闭&nbsp;&nbsp;
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled2" class="r_dio" value="1">
													<label for="usercaptcha_enabled2"></label>&nbsp;开启 
												</td>
											</tr>
											<tr>
												<td class="post_r">会员注册审核方式：</td>
												<td id="register_activatetype">
													<input type="radio" name="register_activatetype" id="register_activatetype1" class="r_dio" value="0">
													<label for="register_activatetype1"></label>&nbsp;无&nbsp;&nbsp;
													<input type="radio" name="register_activatetype" id="register_activatetype2" class="r_dio" value="1">
													<label for="register_activatetype2"></label>&nbsp;邮件激活 
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">附件存放目录：</td>
												<td>
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled1" class="r_dio" value="0">
													<label for="usercaptcha_enabled1"></label>&nbsp;栏目目录&nbsp;&nbsp;
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled2" class="r_dio" value="1">
													<label for="usercaptcha_enabled2"></label>&nbsp;/d/file/p目录 
													<input type="radio" name="usercaptcha_enabled" id="usercaptcha_enabled3" class="r_dio" value="2">
													<label for="usercaptcha_enabled3"></label>&nbsp;/d/file目录 
												</td>
											</tr>
											<tr>
												<td class="post_r">附件存放日期目录：</td>
												<td>
													<input type="text" class="input300" name="attach_datedir" id="attach_datedir" value="">
													&nbsp;
													<select name="datedir" id="datedir">
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
													<input type="text" class="input300" name="allowed_filesize" id="allowed_filesize" value="">&nbsp;&nbsp;&nbsp;KB
												</td>
											</tr>
											<tr>
												<td class="post_r">后台上传文件扩展名：</td>
												<td>
													<input type="text" class="input300" name="allowed_filetype" id="allowed_filetype" value="">&nbsp;&nbsp;(多个请用“|”格开，如：.gif|.jpg)
												</td>
											</tr>
											<tr>
												<td class="post_r">前台投稿附件设置：</td>
												<td>
													<input type="checkbox" name="contribution_imgup" class="c_box" id="contribution_imgup">
													<label for="contribution_imgup" style="top:4px;"></label>
													开启上传图片,最大图片：<input type="text" class="input300" name="contribution_imgupsize" id="contribution_imgupsize" value="">&nbsp;KB
													<div class="blank5"></div>
													图片扩展名：<input type="text" class="input400" name="contribution_imguptype" id="contribution_imguptype" value="">&nbsp;(多个用"|"格开)
													<div class="blank5"></div>
													<input type="checkbox" name="contribution_imgup" class="c_box" id="contribution_fileup">
													<label for="contribution_fileup" style="top:4px;"></label>
													开启上传附件,最大附件：<input type="text" class="input300" name="contribution_fileupsize" id="contribution_fileupsize" value="">&nbsp;KB
													<div class="blank5"></div>
													附件扩展名：<input type="text" class="input400" name="contribution_fileuptype" id="contribution_fileuptype" value="">&nbsp;(多个用"|"格开)
												</td>
											</tr>
											<tr>
												<td class="post_r">数据备份存放目录：</td>
												<td>
													<input type="text" class="input300" name="bak_dir" id="bak_dir" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">压缩包存放目录：</td>
												<td>
													<input type="text" class="input300" name="bak_zipdir" id="bak_zipdir" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">支持MYSQL查询方式：</td>
												<td>
													<input type="checkbox" name="bak_mysql" class="c_box" id="bak_mysql">
													<label for="bak_mysql" style="top:4px;"></label>&nbsp;支持
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">搜索关键字长度限制：</td>
												<td>
													<input type="text" class="input40" name="search_minlength" id="search_minlength" value="">
													~
													<input type="text" class="input40" name="search_maxlength" id="search_maxlength" value="">
													&nbsp;个字符之间
												</td>
											</tr>
											<tr>
												<td class="post_r">搜索时间间隔：</td>
												<td>
													<input type="text" class="input600" name="search_interval" id="search_interval" value="">
													&nbsp;秒
												</td>
											</tr>
											<tr>
												<td class="post_r">页面显示：</td>
												<td>
													每页显示&nbsp;<input type="text" class="input40" name="search_perpage" id="search_perpage" value="">&nbsp;条记录，
													<input type="text" class="input40" name="search_linksize" id="search_linksize" value="">&nbsp;个分页链接
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">所在位置导航分隔字符：</td>
												<td>
													<input type="text" class="input400" name="pagenav_delimiter" id="pagenav_delimiter" value="">
													&nbsp;秒
												</td>
											</tr>
											<tr>
												<td class="post_r">信息简介截取：</td>
												<td>
													<input type="text" class="input400" name="intro_length" id="intro_length" value="">
													&nbsp;秒
												</td>
											</tr>
											<tr>
												<td class="post_r">相关链接依据：</td>
												<td>
													<select name="relate_rule" id="relate_rule">
														<option value="0" selected="">标题包含关键字</option>
														<option value="1">关键字相同</option>
														<option value="2">标题包含与关键字相同</option>
													</select>
												</td>
											</tr>
											<tr>
												<td class="post_r">列表分页函数(下拉)：</td>
												<td>
													<input type="text" class="input400" name="config_listpager_dropdownfunc" id="config_listpager_dropdownfunc" value="">
												</td>
											</tr>
											<tr>
												<td class="post_r">列表分页函数(列表)：</td>
												<td>
													<input type="text" class="input300" name="config_listpager_listfunc" id="config_listpager_listfunc" value="">
													每页显示&nbsp;<input type="text" class="input40" name="config_listpager_linksize" id="config_listpager_linksize" value="">&nbsp;个页码
												</td>
											</tr>
											<tr>
												<td class="post_r">内容分页函数：</td>
												<td>
													<input type="text" class="input400" name="config_article_pagerfunc" id="config_article_pagerfunc" value="">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											<tr>
												<td class="post_r">邮件发送模式：</td>
												<td id="config_email_sendtype">
													<input type="radio" name="config_email_sendtype" id="config_email_sendtype1" class="r_dio" value="0">
													<label for="config_email_sendtype1"></label>&nbsp;mail 函数发送 &nbsp;&nbsp;
													<input type="radio" name="config_email_sendtype" id="config_email_sendtype2" class="r_dio" value="1">
													<label for="config_email_sendtype2"></label>&nbsp; SMTP 模块发送
												</td>
											</tr>
											<tr>
												<td class="post_r" colspan="2">SMTP 模块发送设置：</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab_content">
								<div class="wrap_post">
									<table cellpadding="1" cellspacing="1" class="post_tb">
										<tbody>
											图片设置
										</tbody>
									</table>
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
	})
</script>				