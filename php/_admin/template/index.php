<?php include tpl('header');?>
<?php include tpl('menu');?>
	<div class="main">
		<dl>
			<h2 class="section-header">������Ϣ</h2>
			<dt>��Ҫ�������ַ:</dt> 
			<dd><input type="text" size="32" value="2563323" name="name"></dd>
			<dd class='tipe'>��վ��Ҫ����������ַ����:http://www.baidu.com/</dd>
		</dl>
		<?php
			w('text')->set('name','��Ҫ�������ַ')
					->set('key','host')
					->set('tipe','��վ��Ҫ����������ַ����:http://www.baidu.com/')
					->e();
		?>
		<dl> 
			<dt>վ������:</dt> 
			<dd><textarea class="tarea" cols="50" name="script" rows="5">123212323</textarea></dd>
			<dd class='tipe'>վ�����ƣ�����ʾ����������ڱ����λ��</dd>
		</dl>
	</div>
<?php include tpl('footer');?>