<?php

class Test
{
    public function echoAll($what)
    {
        // problem
        if ($what == 'a') {
            echo 'aaa';
            echo 'aaa';
            echo 'aaa';
            echo 'aaa';
            echo 'aaa';
            echo 'aaa';

            return 'A';
        } elseif ($what == 'b') {
            echo 'bbb';
            echo 'bbb';
            echo 'bbb';
            echo 'bbb';
            echo 'bbb';
            echo 'bbb';

            return 'B';
        } elseif ($what == 'c') {
            echo 'ccc';
            echo 'ccc';
            echo 'ccc';
            echo 'ccc';
            echo 'ccc';
            echo 'ccc';

            return 'C';
        } else {
            echo 'otherwise';
            echo 'otherwise';
            echo 'otherwise';
            echo 'otherwise';
            echo 'otherwise';

            return 'Default';
        }

        // Solution
        if ($what == 'a') {
            $this->aaa();
        } elseif ($what == 'b') {
            $this->bbb();
        } elseif ($what == 'c') {
            $this->ccc();
        } else {
            $this->otherwise();
        }

        // So, we have severa $this-> and now we learned look up table
        $method = $this->getMethodName($what);
        return $this->$method();
    }

    public function getMethodName($what)
    {
        $map = [
            'a' => 'aaa',
            'b' => 'bbb',
            'c' => 'ccc'
        ];

        return $map[$what] ?? 'otherwise';
    }

    private function aaa()
    {
        echo 'aaa';
        echo 'aaa';
        echo 'aaa';
        echo 'aaa';
        echo 'aaa';
        echo 'aaa';

        return 'A';
    }

    private function bbb()
    {
        echo 'bbb';
        echo 'bbb';
        echo 'bbb';
        echo 'bbb';
        echo 'bbb';
        echo 'bbb';

        return 'B';
    }

    private function ccc()
    {
        echo 'ccc';
        echo 'ccc';
        echo 'ccc';
        echo 'ccc';
        echo 'ccc';
        echo 'ccc';

        return 'C';
    }

    private function otherwise()
    {
        echo 'otherwise';
        echo 'otherwise';
        echo 'otherwise';
        echo 'otherwise';
        echo 'otherwise';
        echo 'otherwise';

        return 'Defalut';
    }
}
