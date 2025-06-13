<?php

namespace App\Service;

// Ce service est un exemple pour les tests de revue de code.
// Il contient des mauvaises pratiques intentionnelles.
class BadCalculatorService
{
    /**
     * Ajoute deux nombres. Manque de typage.
     */
    public function add($a, $b)
    {
        // Pas de vérification si les entrées sont bien des nombres.
        return $a + $b;
    }

    /**
     * Divise deux nombres. Contient une faille évidente.
     */
    public function divide($numerator, $denominator)
    {
        // Risque critique de division par zéro !
        // L'opérateur @ supprime l'erreur, ce qui est une très mauvaise pratique.
        return @($numerator / $denominator);
    }
}
