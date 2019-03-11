<?php

namespace SRP;

interface IUserInteraction
{

    /**
     * Calcul de la moyenne de l'étudiant en fonction des notes de l'étudiant,
     * application de regles métiers (notes éliminatoires, etc...
     *
     * @return boolean
     */
    public function isGraduated();

    /**
     * Calcul en fonction des notes de l'étudiants, application de regles métiers (notes éliminatoires, etc...
     *
     * @return float
     */
    public function calculateAverage();
}