<?php

// Open Closed Principle Violation
class Programador
{
    public function code()
    {
        return 'coding';
    }
}

class Tester
{
    public function test()
    {
        return 'testing';
    }
}

class GerenciamentoProjeto
{
    public function process($member)
    {
        if ($member instanceof Programador) {
            $member->code();
        } elseif ($member instanceof Tester) {
            $member->test();
        };

        throw new Exception('Invalid input member');
    }
}