<?php
<<<<<<< HEAD
require_once 'PHPUnit/Framework/TestCase.php';
=======

>>>>>>> 14d380ac29e06445c2e4508c2ee4387ad37e0863
require "gigasecond.php";

class GigasecondTest extends \PHPUnit_Framework_TestCase
{

    public function dateSetup($date)
    {
        $UTC = new DateTimeZone("UTC");
        $date = new DateTime($date, $UTC);
        return $date;
    }

    public function testDate1()
    {
        $date = GigasecondTest::dateSetup("2011-04-25");
        $gs = from($date);

        $this->assertSame("2043-01-01 01:46:40", $gs->format("Y-m-d H:i:s"));
    }

    public function testDate2()
    {

        $date = GigasecondTest::dateSetup("1977-06-13");
        $gs = from($date);

        $this->assertSame("2009-02-19 01:46:40", $gs->format("Y-m-d H:i:s"));
    }

    public function testPreUnixEpoch()
    {
        //$this->markTestSkipped();
        $date = GigasecondTest::dateSetup("1959-7-19");
        $gs = from($date);

        $this->assertSame("1991-03-27 01:46:40", $gs->format("Y-m-d H:i:s"));
    }

    public function testDateWithTime1()
    {
        //$this->markTestSkipped();
        $date = GigasecondTest::dateSetup("2015-01-24 22:00:00");
        $gs = from($date);

        $this->assertSame("2046-10-02 23:46:40", $gs->format("Y-m-d H:i:s"));
    }

    public function testDateWithTime2()
    {
        //$this->markTestSkipped();
        $date = GigasecondTest::dateSetup("2015-01-24 23:59:59");
        $gs = from($date);

        $this->assertSame("2046-10-03 01:46:39", $gs->format("Y-m-d H:i:s"));
    }

    public function testNoMutation()
    {
        //$this->markTestSkipped();
        $date = GigasecondTest::dateSetup("2015-01-24");
        $gs = from($date);

        $this->assertSame($date, $gs);
    }

    public function testYourself()
    {
        // Replace the string "you_birthday" with your birthday's datestring

        //$this->markTestSkipped("Skip");
        $your_birthday = GigasecondTest::dateSetup("1990-03-08 09:20:00");
        $gs = from($your_birthday);

        $this->assertSame("2021-11-14 11:06:40", $gs->format("Y-m-d H:i:s"));
    }
}
