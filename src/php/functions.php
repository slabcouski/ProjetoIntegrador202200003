<?php
    class Functions {
        public function unmaskCPF($cpf) {
            $cpf = str_replace('.', '', $cpf);
            $cpf = str_replace('-', '', $cpf);
            return $cpf;
        }

        public function unmaskNumber($number) {
            $number = str_replace('(', '', $number);
            $number = str_replace(')', '', $number);
            $number = str_replace(' ', '', $number);
            $number = str_replace('-', '', $number);
            return $number;
        }
        
        public function unmaskDataNasc($dataNasc) {
            $dataNasc = str_replace('/', '', $dataNasc);
            return $dataNasc;
        }

        public function fixName($text) {
            if (str_contains($text, " ") && str_contains(strrev($text), " ")) {
                $textBackup = $text;
                $spacePosition = strpos($text, " ");
                $text = substr($text, 0, $spacePosition);
                $spacePosition = strpos(strrev($textBackup), " ");
                $textBackup  = substr(strrev($textBackup), 0, $spacePosition);
                $text = $text . " " . strrev($textBackup);
                return $text;
            }
            return $text;
        }
    }
?>