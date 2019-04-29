<?php class PostModel extends Model {
    public function getAll(){
        $sql = 'SELECT * FROM post';

        return $this->mysqli->query($sql);
    }
}