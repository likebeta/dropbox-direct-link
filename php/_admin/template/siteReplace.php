<?php include tpl('header');?>
<?php include tpl('menu');?>
	<div class="main">
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
	        		$replaces = d('config')->get('replaces');
	        		$i = 'class="ae-even"';
	        		if(is_array($replaces))
	        		foreach($replaces as $key => $item){
	        			if($i == 'class="ae-even"'){
	        				$i = '';
	        			}else{
	        				$i = 'class="ae-even"';
	        			}
	        			?>
	        	<tr <?php _e($i);?>>
	                <td>
	                	<div class="row-title">
		                    <a href="./?m=site&a=EditReplace&key=<?php _e($key)?>" title="�༭<?php _e($item['name'])?>"><?php _e($item['name'])?></a>
	                	</div>
	                    <div class="row actions">
	                        <span><a href="./?m=site&a=editReplace&key=<?php _e($key)?>">�༭</a> | </span>
	                        <span><a href="./?m=site&a=delReplace&key=<?php _e($key)?>">ɾ��</a></span>
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