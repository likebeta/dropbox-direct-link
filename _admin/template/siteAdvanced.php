<?php include tpl('header');?>
<?php include tpl('menu');?>
	<div class="main">
		<form action="" method="POST">
		<h2 class="section-header">�Զ���COOKIES</h2>
		<?php
			w('select')->set('name','COOKIES����')
					->set('key','cookies')
					->set('value',d('config')->get('cookies'))
					->set('options',array('��ͳcookies'=>'0','ȫ��cookies'=>'1','�Զ���cookies'=>'2',))
					->set('tipe','��ͳcookies�ܱ�֤ÿ���ÿ�һ��cookies��ȫ��cookies�������зÿ�һ��cookies���Զ���cookies��cookies������仯')
					->e();
			w('text')->set('name','�Զ���COOKIES')
					->set('key','diyCookies')
					->set('value',d('config')->get('diyCookies'))
					->set('tipe','��COOKIES���á�ѡ�����ѡ���Զ���cookies��������Ч')
					->e();
		?>
			
		<br>
		<h2 class="section-header">�Զ����������ʶ(agent)</h2>
		<?php
			w('select')->set('name','α��agent')
					->set('key','agent')
					->set('value',d('config')->get('agent'))
					->set('options',array('ʹ�ÿͻ���agent'=>'0','��α��'=>'1','�Զ���agent'=>'2',))
					->set('tipe','����������ܷ÷�����ʶ����IE��firefox�����ֻ����ʣ���������Ϊ��ʹ�ÿͻ���agent��')
					->e();
			w('text')->set('name','�Զ���agent')
					->set('key','diyAgent')
					->set('value',d('config')->get('diyAgent'))
					->set('tipe','��α��agent��ѡ�����ѡ���Զ���agent���Ż���Ч����:<br>Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)')
					->e();
		?>
		
		<br>
		<h2 class="section-header">�Զ�����·(referer)</h2>
		<?php
			w('select')->set('name','α��referer')
					->set('key','referer')
					->set('value',d('config')->get('referer'))
					->set('options',array('�Զ�α��'=>'0','�Զ���referer'=>'1'))
					->set('tipe','�Զ�α����Ի�ԭԭʼ��referer,ʹȫվ�����������ͻ�Ʒ�����')
					->e();
			w('text')->set('name','�Զ���referer')
					->set('key','diyReferer')
					->set('value',d('config')->get('diyReferer'))
					->set('tipe','��α��referer��ѡ�����ѡ���Զ���referer���Ż���Ч����:http://www.baidu.com')
					->e();
		?>
		
		<br>
		<h2 class="section-header">�Զ���IP</h2>
		<?php
			w('select')->set('name','α��ip')
					->set('key','ip')
					->set('value',d('config')->get('ip'))
					->set('options',array('ʹ�÷�����ip'=>'0','ʹ�ÿͻ���ip'=>'1','�Զ���ip'=>'2',))
					->set('tipe','ע��!!�ܴ�����վ��Ȼ���Եõ���������ip,��Ϊ����ȫα��ip!!!')
					->e();
			w('text')->set('name','�Զ���ip')
					->set('key','diyIp')
					->set('value',d('config')->get('diyIp'))
					->set('tipe','α��ipѡ�����ѡ���Զ���IP������Ч,��Ϊ����ȫα��!!!����:127.0.0.1')
					->e();
		?>
			<input type="submit" class="m-button" value="����߼�����" id="submit">
		</form>
	</div>
<?php include tpl('footer');?>