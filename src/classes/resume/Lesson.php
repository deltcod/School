<?php

namespace Com\Iesebre\Dam2\adamalvarado\resume;


use Com\Iesebre\Dam2\adamalvarado\persons\Teacher;
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 19:43
 */

class Lesson {

    public $description;  //Description an one hour in class

    public $teacher; //Teacher

    /**
     * Lesson constructor.
     * @param $teacher
     */
    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * @return mixed
     * Getter description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * Setter description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}