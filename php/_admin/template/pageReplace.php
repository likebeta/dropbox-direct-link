<?php include tpl('header');?>
<?php include tpl('menu');?>
	<div class="main">
		<h2 class="section-header">�Զ���ҳ��(<?php _e($page[name])?>) - <a href="./?m=page&a=edit&key=<?php _e($_GET['key'])?>">����</a>
			 - <a href="./?m=page&a=Advanced&key=<?php _e($_GET['key'])?>">�߼�</a>
			 - �����滻
		</h2>
		<div class="mside side" style="width:316px;padding-right:10px;">
			<form action="" method="POST">
				<h2 class="section-header">��������滻</h2>
				<?php
					w('text')->set('name','����')
							->set('key','name')
							->set('tipe','���������')
							->e();
			
					w('text')->set('name','��������')
							->set('key','seach')
							->set('tipe','������Ҫ�滻������,Ϊ����ƥ��')
							->e();
					
					w('textarea')->set('name','�滻Ϊ')
							->set('key','replace')
							->set('tipe','�����ҵ��������滻Ϊ')
							->e();
				?>
				<input type="submit" class="m-button" value="�ύ" id="submit">
			</form>
		</div>
		<div class="main">
			<h2 class="section-header">�����滻�б�</h2>
			<table class="ae-table ae-table-striped ae-quota-requests">
	        <thead>
	            <tr>
	                <th width="35%">
	                    ����
	                </th>
	                <th>
	                    ����
	                </th>
	                <th>
	                    �滻Ϊ
	                </th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php
	        		$pages = d('config')->get('pages');
	        		$key = $_GET['key'];
					$replaces = $pages[$key]['replaces'];
	        		$i = 'class="ae-even"';
	        		if(is_array($replaces))
	        		foreach($replaces as $rekey => $item){
	        			if($i == 'class="ae-even"'){
	        				$i = '';
	        			}else{
	        				$i = 'class="ae-even"';
	        			}
	        			?>
	        	<tr <?php _e($i);?>>
	                <td>
	                	<div class="row-title">
		                    <a href="./?m=page&a=EditReplace&key=<?php _e($key)?>&rekey=<?php _e($rekey)?>" title="�༭<?php _e($item['name'])?>"><?php _e($item['name'])?></a>
	                	</div>
	                    <div class="row actions">
	                        <span><a href="./?m=page&a=editReplace&key=<?php _e($key)?>&rekey=<?php _e($rekey)?>">�༭</a> | </span>
	                        <span><a href="./?m=page&a=delReplace&key=<?php _e($key)?>&rekey=<?php _e($rekey)?>">ɾ��</a></span>
	                    </div>
	                </td>
	                <td>
	                   <?php _e(htmlspecialchars($item['seach']))?>
	                </td>
	                <td>
	                    <?php _e(htmlspecialchars($item['replace']))?>
	                </td>
	            </tr>
	        			<?php
	        		}
	        	?>
	            </tbody><tfoot>
		            <tr>
		                <td width="35%">
		                    ����
		                </td>
		                <td>
		                    ����
		                </td>
		                <td>
		                    �滻Ϊ
		                </td>
		            </tr>
	            </tfoot>
	        
	    </table>	
		</div>
	</div>
<?php include tpl('footer');?>