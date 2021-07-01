<?php

if(isset($header)) :
	$this->load->view($header);
endif;
if(isset($head)) :
	$this->load->view($head);
endif;
if(isset($sidebar)) :
	$this->load->view($sidebar);
endif;

// if(isset($navbar)) :
// 	$this->load->view($navbar);
// endif;

$this->load->view($content);

if($cetak=="1"){

	if($content1)$this->load->view($content1);
	if($content2)$this->load->view($content2);
	if($content3)$this->load->view($content3);
	if($content4)$this->load->view($content4);
	if($content5)$this->load->view($content5);
	if($content6)$this->load->view($content6);
	if($content7)$this->load->view($content7);
	if($content8)$this->load->view($content8);
	if($content9)$this->load->view($content9);
	if($content10)$this->load->view($content10);
	if($content11)$this->load->view($content11);
}

if(isset($footer)) :
	$this->load->view($footer);
endif;