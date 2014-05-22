<?php

/**
 * Class DSettingsTest
 */
class DSettingsTest extends \PHPUnit_Framework_TestCase {

    /**
     * Get mock object
     *
     * @return mixed
     */
    protected function getMockObject()
    {
        return $this->getMockBuilder('Codepeak\Dsettings\Dsetting')
            ->setMethods(array('query'))
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * Test setting key
     */
    public function testSetKey()
    {

    }

    /**
     * Test get key
     */
    public function testGetKey()
    {

    }

    /**
     * Test setting using invalid key
     */
    public function testSetInvalidData()
    {

    }

}