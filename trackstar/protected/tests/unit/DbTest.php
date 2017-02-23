<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbTest
 *
 * @author nfino
 */
class DbTest extends CTestCase{
    public function testConnection()
    {
        $this->assertNotNull(Yii::app()->db->connectionString);
    }
}
