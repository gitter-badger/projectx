<?php

class PersonTest extends TestCase {
	public function testThatTrueIsTrue()
	{
	  $this->assertTrue(true);
	}

	public function testFnameIsRequired(){
		$p = new Person();
		$p->l_name='Myers';
		$p->m_initial='A.';
		$p->person_type_id='1';

		$this->assertFalse($p->save());
	}
}
