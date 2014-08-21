<?php
class data{
	/*
	 * ����·��
	 * @var string
	 */
	protected $_filePath;
	
	/**
	 * �洢��ʱ����
	 * @var array
	 */
	protected $_data;
	
	/**
	 * ����޸ĵ�������
	 * @var bool
	 */
	protected $_write=FALSE;
	
	function __construct($name){
		$this->_filePath = ADIR.'data/'.$name.'.php';
		$this->load();
	}
	
	/**
	 * ��ȡ�ļ�����, ����_data
	 */
	private function load(){
		if(is_file($this->_filePath)){
			$this->_data=include($this->_filePath);
		}
	}
	
	
	/**
	 * ���ü�ֵ����,�������޸ı��_write
	 * @param $field
	 * @param $value
	 */
	function set($key,$value=""){
		if(is_array($key)){
			foreach($key as $key => $value){
				$this->set($key,$value);
			}
			return $this;
		}
		
		if($this->_data[$key]!=$value){
			$this->_data[$key]=$value;
			$this->_write=true;
		}
		return $this;
	}
	
	/**
	 * ��ȡ����
	 * @param String $field
	 * @return mixed
	 */
	function get($key=""){
		return empty($key)?$this->_data:$this->_data[$key];
	}
	
	/**
	 * ɾ������
	 * @param String $field
	 */
	function del($key=""){
		if(empty($key)){
			$this->_data=NULL;
		}else{
			$this->_data[$key]=NULL;
		}
		$this->_write=true;
	}
	
	/**
	 * ��������,��д�ļ�
	 * 
	 * �ж�_write�Ƿ�Ϊ��,����IO����
	 */
	function __destruct(){
		if(!$this->_write)return;
		if(empty($this->_data)){
			@unlink($this->_filePath);
		}else{
			$filedata='<?php return '.var_export($this->_data,TRUE).';';
			file_put_contents($this->_filePath,$filedata);
		}
	}
	
	/**
	 * ħ������__get,��ü�ֵ
	 * @param String $name
	 */
	public function __get($name){
		return $this->get($name);
	}
	
	/**
	 * ħ������__set,���ü�ֵ
	 * @param $name
	 * @param $value
	 */
	function __set($name,$value){
		return $this->set($name,$value);
	}
}