<?php include tpl('header');?>
<?php include tpl('menu');?>
	<div class="main">
		<div class="mside side" style="width:316px;padding-right:10px;">
			<form action="" method="POST">
				<h2 class="section-header">����Զ���ҳ��</h2>
				<?php
					w('text')->set('name','����')
							->set('key','name')
							->set('tipe','���������')
							->e();
					
					w('text')->set('name','ҳ���ַ')
							->set('key','uri')
							->set('tipe','��Ҫ�Զ����uri,Ϊ����ƥ��<br>��:about.html    ��:html/.*')
							->e();
					
					w('text')->set('name','��Ҫ�������ַ')
							->set('key','host')
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
					
					w('text')->set('name','ģ���ļ���')
							->set('key','template')
							->set('value',$item['template'])
							->set('tipe','����Ϊ��ʹ��ģ�档ʹ��ģ��󣬲�ִ�������滻��ģ���ļ������ڡ�tpl���ļ�����')
							->e();
				?>
				<input type="submit" class="m-button" value="�ύ" id="submit">
				<dl>
					<dd class='tipe'>
						��Ӻ�������Ҳ��б�ѡ�񣬽��и߼�����
					</dd>
				</dl>
			</form>
		</div>
		<div class="main">
			<h2 class="section-header">�Զ���ҳ���б�</h2>
			<table class="ae-table ae-table-striped ae-quota-requests">
	        <thead>
	            <tr>
	                <th width="35%">
	                    ����
	                </th>
	                <th>
	                    ҳ���ַ
	                </th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php
	        		$pages = d('config')->get('pages');
	        		$i = 'class="ae-even"';
	        		if(is_array($pages))
	        		foreach($pages as $key => $item){
	        			if($i == 'class="ae-even"'){
	        				$i = '';
	        			}else{
	        				$i = 'class="ae-even"';
	        			}
	        			?>
	        	<tr <?php _e($i);?>>
	                <td>
	                	<div class="row-title">
		                    <a href="./?m=page&a=edit&key=<?php _e($key)?>" title="�༭<?php _e($item['name'])?>"><?php _e($item['name'])?></a>
	                	</div>
	                    <div class="row actions">
	                        <span><a href="./?m=page&a=edit&key=<?php _e($key)?>">����</a> | </span>
	                        <span><a href="./?m=page&a=Advanced&key=<?php _e($key)?>">�߼�</a> | </span>
	                        <span><a href="./?m=page&a=replace&key=<?php _e($key)?>">�����滻</a> | </span>
	                        <span><a href="./?m=page&a=del&key=<?php _e($key)?>">ɾ��</a></span>
	                    </div>
	                </td>
	                <td>
	                   <?php _e($item['uri'])?>
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
		                    ҳ���ַ
		                </td>
		            </tr>
	            </tfoot>
	        
	    </table>	
		</div>
	</div>
<?php include tpl('footer');?>