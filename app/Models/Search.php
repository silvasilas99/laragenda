<?php

namespace App\Models;

trait Search
{
    private function buildWildCards($term) {
        if ($term == "") {
            return $term;
        }
         
        // Remover simbolos reservados pelo MySQL
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $term);
        
        $words = explode(' ', $term);
        foreach ($words as $idx => $word) {
            // Adicionando operadores para podermos aproveitar o modo
            // booleano dos fulltext indices.
            $words[$idx] = "+" . $word . "*";
        }
        $term = implode (' ', $words);
        return $term;
    }

    protected function scopeSearch ($query, $term) {
        $columns = implode(',', $this->searchable);

        // Modo booleano nos permite dar math para todas as palavras 
        // que comecem com um termo especifico 
        $query->whereRaw(
            "MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)",
            $this->buildWildCards($term)
        );
        return $query;
    }
   

}

?>