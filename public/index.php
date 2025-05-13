<?php
class QueryBuilder{

  private string $query;

  public function select(string $select = '*'){
    // var_dump('select');
    $this->query = "select {$select}";

    return $this;
  }
  public function table(string $table){
    // var_dump('table');
    $this->query.=" from {$table}";

    return $this;
  }

  public function where(array $where){
    // var_dump('where');
    $this->query.= " where  ".implode(' ', $where);

    return $this;
  }

  public function get(){
    var_dump($this->query);
  }
} // QueryBuilder



$query = new QueryBuilder;
// $query->select();
// $query->table();
// $query->where();
// $query->get();

$query->select('id, firstName,lastName')->table('users')->where(['id', '>', 10])->get();

?>
