<?php


class Player
{
    /**
     * @return mixed
     */
    public function getLIFE(): int
    {
        return  $this->LIFE;
    }

    /**
     * @param mixed $LIFE
     */
    public function setLIFE($LIFE)
    {
        $this->LIFE = $LIFE;
    }

    /**
     * @return mixed
     */
    public function getAD(): int
    {
        return $this->AD;
    }



    /**
     * @return mixed
     */
    public function getDEF(): int
    {
        return $this->DEF;
    }

    protected String $NAME;

    /**
     * @return String
     */
    public function getNAME(): string
    {
        return $this->NAME;
    }
    protected Int $LIFE;
    protected Int $AD;
    protected Int $DEF;

    /**
     * Player constructor.
     * @param $NAME
     * @param $LIFE
     * @param $AD
     * @param $DEF
     */
    public function __construct($NAME,$LIFE, $AD, $DEF)
    {
        $this->NAME = $NAME;
        $this->LIFE = $LIFE;
        $this->AD = $AD;
        $this->DEF = $DEF;
    }
}
