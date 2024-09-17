<?php

class User extends Model {
    protected $table = 'users';

    public function getUserById($id) {
        return $this->find($id);
    }
}

?>
