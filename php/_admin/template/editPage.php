<?php include tpl('header');?>
<?php include tpl('menu');?>
	<div class="main">
			<form action="" method="POST">
			<input type="hidden" name='key' value='<?php _e($key)?>'></input>
				<h2 class="section-header">�Զ���ҳ��(<?php _e($item['name'])?>) - ����
					 - <a href="./?m=page&a=Advanced&key=<?php _e($key)?>">�߼�</a>
					 - <a href="./?m=page&a=replace&key=<?php _e($key)?>">�����滻</a>
				</h2>
				<?php
					w('text')->set('name','����')
							->set('key','name')
							->set('value',$item['name'])
							->set('tipe','���������')
							->e();
			
					w('text')->set('name','ҳ���ַ')
							->set('key','uri')
							->set('value',$item['uri'])
							->set('tipe','��Ҫ�Զ����uri,Ϊ����ƥ��<br>��:about.html     ��:html/.*')
							->e();
					
					w('text')->set('name','��Ҫ�������ַ')
							->set('key','host')
							->set('value',$item['host'])
							->set('tipe','��ǰҳ����Ҫ����������ַ����:http://hi.baidu.com/��������ʹ��ȫ������')
							->e();
							
					w('select')->set('name','��������')
							->set('key','returnType')
							->set('value',$item['returnType'])
							->set('options',array('��ҳ(html)'=>'0','�ı�(text)'=>'1','��(form)'=>'2','����(link)'=>'3'))
							->set('tipe','ҳ�淵�ص�����,Ĭ��Ϊ��ҳ��ʽ')
							->e();
					
					w('select')->set('name','�滻����')
							->set('key','replaceDomain')
							->set('value',$item['replaceDomain'])
							->set('options',array('�滻'=>'0','���滻'=>'1'))
							->set('tipe','�滻������ʵ��ȫվ����')
							->e();
					
					w('select')->set('name','�滻HTML��Ե�ַ')
							->set('key','relativeHTML')
							->set('value',$item['relativeHTML'])
							->set('options',array('�滻'=>'0','���滻'=>'1'))
							->set('tipe','�滻��Ե�ַ���������ڶ���Ŀ¼��7ghost�������У�Ӱ����ʽ�ļ����ű���վ������')
							->e();
					w('select')->set('name','�滻CSS��Ե�ַ')
							->set('key','relativeCSS')
							->set('value',$item['relativeCSS'])
							->set('options',array('�滻'=>'0','���滻'=>'1'))
							->set('tipe','�滻��Ե�ַ���������ڶ���Ŀ¼��7ghost�������У�Ӱ����ʽ�ļ��е�ͼƬ')
							->e();
					w('text')->set('name','ģ���ļ���')
							->set('key','template')
							->set('value',$item['template'])
							->set('tipe','����Ϊ��ʹ��ģ�档ʹ��ģ��󣬲�ִ�������滻��ģ���ļ������ڡ�tpl���ļ�����')
							->e();
				?>
				<input type="submit" class="m-button" value="�ύ" id="submit">
			</form>

	</div>
<?php include tpl('footer');?>