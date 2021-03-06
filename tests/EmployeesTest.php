<?php

use PHPUnit\Framework\TestCase;

class EmployeesTest extends TestCase {
    public function testBossNotInsultedByBeingCalledPeon() {
        // $employees = new Employees();
        $employees = new EmployeePatch();

        $expected = array(
            "Linus Duran: Peon",
            "Brennan Odom: Manager, Human Being",
            "Mary Chandler: Human Being, CEO"
        );
        $string = $employees->toString();
        $lines = array_filter(explode("\n", $string));
        foreach ($lines as $i => $line) {
            $this->assertEquals($expected[$i], $line);
        }
    }
}
