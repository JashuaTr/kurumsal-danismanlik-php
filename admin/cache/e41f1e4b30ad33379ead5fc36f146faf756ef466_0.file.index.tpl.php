<?php
/* Smarty version 3.1.30-dev/18, created on 2016-07-20 09:37:20
  from "/home/goxskons/public_html/theme/admin/pages/referance/index.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_578f1c20912297_94875132',
  'file_dependency' => 
  array (
    'e41f1e4b30ad33379ead5fc36f146faf756ef466' => 
    array (
      0 => '/home/goxskons/public_html/theme/admin/pages/referance/index.tpl',
      1 => 1468996637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_578f1c20912297_94875132 ($_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div id="main-wrapper">
	<aside>
		<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<section id="main-container">
		<header>
			<div class="row">		
				<div class="col-sm-12">
					<h4 class="pull-left"><i class="fa fa-pencil antagon-color-main"></i> <?php echo $_smarty_tpl->tpl_vars['homepage']->value['title'];?>
</h4>
				</div>	
			</div>	
		</header>
		<br/>
		
		
		<?php echo '<script'; ?>
 src="../system/ckeditor/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

		
		<div id="content">
			<div class="row">
				<form class="verikaydet" action="index.php?page=page/referance" method="post" enctype="multipart/form-data">
				<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['tokenID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
			
				
				<div class="col-sm-12">
					<section id="headings" class="menu-anchor">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">SEO Ayarları</h3>
							</div>
							<div class="panel-body">
								<div class="page-header">
									<div class="form-horizontal">
										
										<div class="form-group">
											<label for="title" class="col-sm-2 control-label">Başlık</label>
											<div class="col-sm-10">
												<div class="input-group" style="margin-bottom: 3px;">
													<input type="text" name="seo_title" class="form-control" id="title" placeholder="Google arama sıralamasında gozuken başlık" value="<?php echo $_smarty_tpl->tpl_vars['homepage']->value['seo_title'];?>
">
													<span class="input-group-btn">
														  <a class="btn btn-midnight" data-container="body" data-toggle="popover" data-placement="top" data-content="Google Arama sayfalarında kelime arandıkdan sonra listelenen sitelerde başlık altındakı siyah renkde olan kısa açıklamaları bu bölümden ayarlayabilirsiniz" data-original-title="" title="" aria-describedby="popover464119"><i class="fa fa-question"></i></a>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="keyword" class="col-sm-2 control-label">Keyword</label>
											<div class="col-sm-10">
												<div class="input-group" style="margin-bottom: 3px;">
													<input type="text" name="seo_keyword" class="form-control" id="keyword" placeholder="Etiket kelimelere göre google aramasında gözükmesi" value="<?php echo $_smarty_tpl->tpl_vars['homepage']->value['seo_keyword'];?>
">
													<span class="input-group-btn">
													  <a class="btn btn-midnight" data-container="body" data-toggle="popover" data-placement="top" data-content="Google Arama sayfalarında kelime arandıkdan sonra listelenen sitelerde başlık altındakı siyah renkde olan kısa açıklamaları bu bölümden ayarlayabilirsiniz" data-original-title="" title="" aria-describedby="popover464119"><i class="fa fa-question"></i></a>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="desc" class="col-sm-2 control-label">Description </label>
											<div class="col-sm-10">
												<div class="input-group" style="margin-bottom: 3px;">
													<input type="text" name="seo_description" class="form-control search" id="desc" placeholder="Google arama sıralamasında gözüken açıklama" value="<?php echo $_smarty_tpl->tpl_vars['homepage']->value['seo_description'];?>
">
													<span class="input-group-btn">
													  <a class="btn btn-midnight" data-container="body" data-toggle="popover" data-placement="top" data-content="Google Arama sayfalarında kelime arandıkdan sonra listelenen sitelerde başlık altındakı siyah renkde olan kısa açıklamaları bu bölümden ayarlayabilirsiniz" data-original-title="" title="" aria-describedby="popover464119"><i class="fa fa-question"></i></a>
													</span>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label for="dil" class="col-sm-2 control-label">Anasayfa'da </label>
											<div class="col-sm-10">
												<label>
													<input type="radio" name="homepagestatus" value="1" <?php if ($_smarty_tpl->tpl_vars['homepage']->value['homepagestatus'] == 1) {?> checked <?php }?>>
													<span> Gizle</span>
												</label>
												
												<label>
													<input type="radio" name="homepagestatus" value="0" <?php if ($_smarty_tpl->tpl_vars['homepage']->value['homepagestatus'] == 0) {?> checked <?php }?>>
													<span> Göster</span>
												</label>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				
				
				
				<div class="col-sm-12">
					<section id="headings" class="menu-anchor">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Sayfa Resmi</h3>
							</div>
							<div class="panel-body">
								<div class="page-header">
									<div class="form-horizontal">
										
										<div class="col-sm-12 col-md-12">
											<div class="fileinput fileinput-new" style="width:100%" data-provides="fileinput">
												<div class="fileinput-new thumbnail" style="width:100%">
													<img style="width:100%" src="../upload/photo/<?php if ($_smarty_tpl->tpl_vars['homepage']->value['photo'] == '') {?>no-banner.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['homepage']->value['photo'];
}?>">
												</div>
												<div class="fileinput-preview fileinput-exists thumbnail" style="width:100%"></div>
												<div>
													<span class="col-md-6 btn btn-info btn-file center-block">
														<span class="fileinput-new"><i class="fa fa-plus"></i> Sayfa Resmi Seç</span>
														<span class="fileinput-exists"><i class="fa fa-refresh"></i> Resmi Degiştir</span>
														<input type="file" id="photo" name="photo">
													</span>
													<span class="col-md-6 btn btn-danger center-block kaldirresmi fileinput-new">
														<span class="fileinput-new"><i class="fa fa-minus"></i> Resmi Sil</span>
														<input type="checkbox" id="photoReset" name="photoReset"/>
													</span>
													<a href="#" class="col-md-6 btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-minus"></i> İşlemi Iptal Et</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				
				
				<div class="col-sm-12">
					<section id="headings" class="menu-anchor">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Sayfa Bilgileri</h3>
							</div>
							<div class="panel-body">
								<div class="page-header">
									<div class="form-horizontal">
										
										<div class="form-group" id="form">
											<label for="desc" class="col-sm-2 control-label">Sayfa İçerik </label>
											<div class="col-sm-10">
												<div class="input-group center-block" style="margin-bottom: 3px;">
													<textarea name="content" id="ckeditor" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['homepage']->value['content'];?>
</textarea>
												</div>
											</div>
										</div>
										
										
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				
				
				
				
				
				
				
				<?php if ($_smarty_tpl->tpl_vars['categorys']->value == 1) {?>			
				
				<div class="col-sm-12">
					<section id="headings" class="menu-anchor">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title pull-left">
								Kategoriler</h3>
								<div class="pull-right">
									<a data-toggle="modal" href="#kategoriekle" class="btn btn-cyanide"><i class="fa fa-tags"></i> Kategori Ekle</a>
									</div>
									<div class="clearfix"></div>
							</div>
							<div class="panel-body">
								<div class="panel panel-default">
									<table class="table table-striped">
										<thead> 
											<tr>
												<th style="width: 15px;">Aktiflik</th>
												<th style="width: 15px;">Sıralama</th>
												<th style="width: 45px;">#</th>
												<th>Başlık <span class="badge badge-cyanide" data-container="body" data-toggle="popover" data-placement="right" data-content="Google Arama sayfalarında kelime arandıkdan sonra listelenen sitelerde başlık altındakı siyah renkde olan kısa açıklamaları bu bölümden ayarlayabilirsiniz" data-original-title="" title=""><i class="fa fa-question"></i></span></th>
												<th style="width: 130px;">İşlem <span class="badge badge-cyanide" data-container="body" data-toggle="popover" data-placement="left" data-content="Google Arama sayfalarında kelime arandıkdan sonra listelenen sitelerde başlık altındakı siyah renkde olan kısa açıklamaları bu bölümden ayarlayabilirsiniz" data-original-title="" title=""><i class="fa fa-question"></i></span></th> 
											</tr>
											</thead>
											<tbody id="sortablecategory" data-page="page/referance/category/sort">
											<?php if ($_smarty_tpl->tpl_vars['category']->value == TRUE) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'categorydon', false, 'k');
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['categorydon']->value) {
$_smarty_tpl->tpl_vars['categorydon']->_loop = true;
$__foreach_categorydon_0_saved = $_smarty_tpl->tpl_vars['categorydon'];
?>
												<tr id="item-<?php echo $_smarty_tpl->tpl_vars['categorydon']->value['id'];?>
">
													<td class="text-center"><button type="button" data-name="<?php echo $_smarty_tpl->tpl_vars['categorydon']->value['seo_title'];?>
" data-database="page/referance/category/status" data-id="<?php echo $_smarty_tpl->tpl_vars['categorydon']->value['id'];?>
" data-status="<?php echo $_smarty_tpl->tpl_vars['categorydon']->value['status'];?>
" class="btn <?php if ($_smarty_tpl->tpl_vars['categorydon']->value['status'] == 0) {?>btn-primary<?php } else { ?>btn-danger<?php }?> btn-xs status"><i class="fa fa-star" aria-hidden="true"></i></button></td>
													<td class="text-center"><button type="button" class="btn btn-warning btn-xs "><i class="fa fa-arrows" aria-hidden="true"></i></button></td>
													<td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['categorydon']->value['seo_title'];?>
</td>
													<td>
														<a href="index.php?page=page/referance/category/edit&id=<?php echo $_smarty_tpl->tpl_vars['categorydon']->value['id'];?>
"><span class="label label-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Düzenle</span></a>
														<a class="divtikla" href="index.php?page=page/referance/category/delete&id=<?php echo $_smarty_tpl->tpl_vars['categorydon']->value['id'];?>
"><span class="label label-danger"><i class="fa fa-times" aria-hidden="true"></i> Sil</span></a>
													</td>
												</tr>
											<?php
$_smarty_tpl->tpl_vars['categorydon'] = $__foreach_categorydon_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
											<?php } else { ?>
												<tr>
													<td></td>
													<td><center>Hiç Kayıt Bulunamadı!</center></td>
													<td></td>
													<td></td>
												</tr>
											<?php }?>
											</tbody>
										</table>
								</div>	
							</div>
						</div>
					</section>
				</div>
				<?php }?>
				<a style="display:none" href="javascript:" id="siralamakaydet" class="btn btn-berry">Sıralama Kaydedildi.</a>
				
				
				
				
				
				<?php if ($_smarty_tpl->tpl_vars['categorys']->value == 1) {?>			
				
				<div class="col-sm-12">
					<section id="headings" class="menu-anchor">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title pull-left">
								Referanslar
										
								</h3>
								<div class="pull-right">
									<a href="index.php?page=page/referance/add" class="btn btn-cyanide"><i class="fa fa-tags"></i> Referans Ekle</a>
									</div>
									<div class="clearfix"></div>
							</div>
							<div class="panel-body">
								<div class="panel panel-default">
									
										<table class="table table-striped table-hover table-bordered">
											<thead> 
											<tr>
												<th style="width: 15px;">Aktiflik</th>
												<th style="width: 15px;">Sıralama</th>
												<th style="width: 45px;">#</th>
												<th>Başlık <span class="badge badge-cyanide" data-container="body" data-toggle="popover" data-placement="right" data-content="Google Arama sayfalarında kelime arandıkdan sonra listelenen sitelerde başlık altındakı siyah renkde olan kısa açıklamaları bu bölümden ayarlayabilirsiniz" data-original-title="" title=""><i class="fa fa-question"></i></span></th>
												<th style="width: 130px;">İşlem <span class="badge badge-cyanide" data-container="body" data-toggle="popover" data-placement="left" data-content="Google Arama sayfalarında kelime arandıkdan sonra listelenen sitelerde başlık altındakı siyah renkde olan kısa açıklamaları bu bölümden ayarlayabilirsiniz" data-original-title="" title=""><i class="fa fa-question"></i></span></th> 
											</tr>
											</thead>
											<tbody id="sortable" data-page="page/referance/sort">
											<?php if ($_smarty_tpl->tpl_vars['products']->value == TRUE) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'don');
foreach ($_from as $_smarty_tpl->tpl_vars['don']->value) {
$_smarty_tpl->tpl_vars['don']->_loop = true;
$__foreach_don_1_saved = $_smarty_tpl->tpl_vars['don'];
?>
												<tr id="item-<?php echo $_smarty_tpl->tpl_vars['don']->value['id'];?>
">
													<td class="text-center"><button type="button" data-name="<?php echo $_smarty_tpl->tpl_vars['don']->value['seo_title'];?>
" data-database="page/referance/status" data-id="<?php echo $_smarty_tpl->tpl_vars['don']->value['id'];?>
" data-status="<?php echo $_smarty_tpl->tpl_vars['don']->value['status'];?>
" class="btn <?php if ($_smarty_tpl->tpl_vars['don']->value['status'] == 0) {?>btn-primary<?php } else { ?>btn-danger<?php }?> btn-xs status"><i class="fa fa-star" aria-hidden="true"></i></button></td>
													<td class="text-center"><button type="button" class="btn btn-warning btn-xs "><i class="fa fa-arrows" aria-hidden="true"></i></button></td>
													<td><?php echo $_smarty_tpl->tpl_vars['don']->value['id'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['don']->value['seo_title'];?>
</td>
													<td>
														<a href="index.php?page=page/referance/edit&id=<?php echo $_smarty_tpl->tpl_vars['don']->value['id'];?>
"><span class="label label-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Düzenle</span></a>
														<a class="divtikla" href="index.php?page=page/referance/delete&id=<?php echo $_smarty_tpl->tpl_vars['don']->value['id'];?>
"><span class="label label-danger"><i class="fa fa-times" aria-hidden="true"></i> Sil</span></a>
													</td>
												</tr>
											<?php
$_smarty_tpl->tpl_vars['don'] = $__foreach_don_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
											<?php } else { ?>
												<tr>
													<td></td>
													<td><center>Hiç Kayıt Bulunamadı!</center></td>
													<td></td>
													<td></td>
												</tr>
											<?php }?>
											</tbody>
										</table>
								</div>	
							</div>
						</div>
					</section>
				</div>
				<?php }?>
				
				
				
				<div class="col-sm-12 alert alert-info">
					<div class="pull-right btn-group">
						<button type="submit" id="fat-btn" data-loading-text="Lütfen Bekleyiniz..." class="btn btn-labeled btn-berry">Tüm Ayarları Kaydet<span class="btn-label btn-label-right"><i class="fa fa-save"></i></span></button>
					</div>
				</div>
			</form>
			</div>
		</div>
		</section>
		
		
		
		
		
		
		<?php if ($_smarty_tpl->tpl_vars['categorys']->value == 1) {?>	
			
			
			
			<div id="kategoriekle" class="modal fade" tabindex="-1" data-replace="true" data-width="760" style="display: none;">
				<form class="popupkaydet" action="index.php?page=page/referance/category/add" method="post" enctype="multipart/form-data">
				<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['tokenID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Yeni Bir Kategori Ekleme</h4>
				</div>
				<div class="modal-body">
					<div class="col-sm-12 col-md-12">
						<div class="form-group">
							<label class="col-sm-2 control-label">Başlık</label>
							<div class="col-sm-10">
								<div class="input-group" style="margin-bottom: 3px;">
									<input type="text" name="seo_title" class="form-control" id="title" placeholder="Google arama sıralamasında gozuken başlık">
									<span class="input-group-btn">
										  <a class="btn btn-midnight" data-container="body" data-toggle="popover" data-placement="top" data-content="Google Arama sayfalarında kelime arandıkdan sonra listelenen sitelerde başlık altındakı siyah renkde olan kısa açıklamaları bu bölümden ayarlayabilirsiniz" data-original-title="" title="" aria-describedby="popover464119"><i class="fa fa-question"></i></a>
									</span>
								</div>
							</div>
						</div>
						
					</div>
					
					
				
					
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Kaydet</button>
				</div>
				</form>
			</div>
		
		<?php }?>
		
		
	</aside>
 </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}