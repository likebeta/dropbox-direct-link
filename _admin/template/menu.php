<?php
	function createMenu($name,$url){
		$now = "./?m=".$_GET['m']."&a=".$_GET['a'];
		if($url==$now)
			$section = 'class="section"';
		echo "<li><a href='$url' $section>$name</a></li>";
	}
?>
	<div class="side">
		<div id="nav">
			<ul class="dashboard main">
				<li>
					<span>ȫ��</span>
					<ul>
						<?php
							createMenu('��������','./?m=site&a=Index');
							createMenu('�߼�����','./?m=site&a=Advanced');
							createMenu('�����滻','./?m=site&a=Replace');
						?>
					</ul>
				</li>
				<li>
					<span>�Զ���ҳ��</span>
					<ul>
						<?php
							createMenu('�Զ���ҳ��','./?m=page&a=Index');
							createMenu('����Զ���ҳ��','./?m=page&a=Edit');
						?>
					</ul>
				</li>
				<!--
				<li>
					<span>ҳ��ӳ��</span>
				</li>
				<li>
					<span>����</span>
				</li>
				-->
			</ul>
			<a id="collapsible" href="#" style="height: 300px;"> </a>
		</div>
	</div>