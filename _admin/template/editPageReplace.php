<?php include tpl('header');?>
<?php include tpl('menu');?>
	<div class="main">
			<form action="" method="POST">
				<h2 class="section-header">�Զ���ҳ(<?php _e($page[name])?>)-�༭�����滻</h2>
				<input type="hidden" name='rekey' value='<?php _e($_GET['rekey'])?>'></input>
				<?php
					w('text')->set('name','����')
							->set('key','name')
							->set('value',$item['name'])
							->set('tipe','���������')
							->e();
			
					w('text')->set('name','��������')
							->set('key','seach')
							->set('value',$item['seach'])
							->set('tipe','������Ҫ�滻������,Ϊ����ƥ��')
							->e();
					
					w('textarea')->set('name','�滻Ϊ')
							->set('key','replace')
							->set('value',$item['replace'])
							->set('tipe','�����ҵ��������滻Ϊ')
							->e();
				?>
				<input type="submit" class="m-button" value="�ύ" id="submit">
			</form>
	</div>
<?php include tpl('footer');?>