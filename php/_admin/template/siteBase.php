<?php include tpl('header');?>
<?php include tpl('menu');?>
	<div class="main">
		<form action="" method="POST">
		<h2 class="section-header">������Ϣ</h2>
		<?php
			w('text')->set('name','��Ҫ�������ַ')
					->set('key','host')
					->set('value',d('config')->get('host'))
					->set('tipe','��վ��Ҫ����������ַ����:http://www.baidu.com/')
					->e();

			w('select')->set('name','�滻����')
					->set('key','replaceDomain')
					->set('value',d('config')->get('replaceDomain'))
					->set('options',array('�滻'=>'0','���滻'=>'1'))
					->set('tipe','�滻������ʵ��ȫվ����')
					->e();
			
			w('select')->set('name','�滻HTML��Ե�ַ')
					->set('key','relativeHTML')
					->set('value',d('config')->get('relativeHTML'))
					->set('options',array('�滻'=>'0','���滻'=>'1'))
					->set('tipe','�滻��Ե�ַ���������ڶ���Ŀ¼��7ghost�������У�Ӱ����ʽ�ļ����ű���վ������')
					->e();
			w('select')->set('name','�滻CSS��Ե�ַ')
					->set('key','relativeCSS')
					->set('value',d('config')->get('relativeCSS'))
					->set('options',array('�滻'=>'0','���滻'=>'1'))
					->set('tipe','�滻��Ե�ַ���������ڶ���Ŀ¼��7ghost�������У�Ӱ����ʽ�ļ��е�ͼƬ')
					->e();
		?>
		<br>
		<h2 class="section-header">��̬ҳ�滺��</h2>
		<?php
			w('select')->set('name','�Ƿ�������')
					->set('key','static')
					->set('value',d('config')->get('static'))
					->set('options',array('����'=>'0','������'=>'1'))
					->set('tipe','������̬���棬���Զ����ļ����ڱ��أ��뿪����Ŀ¼��дȨ��')
					->e();
			w('text')->set('name','�Զ��建������')
					->set('key','diyStatic')
					->set('value',d('config')->get('diyStatic'))
					->set('tipe','���Ƿ������桱ѡ�����ѡ�񡰻��桱������Ч!!!����:css|js|html')
					->e();
		?>
			<input type="submit" class="m-button" value="�ύ" id="submit">
		</form>
	</div>
<?php include tpl('footer');?>