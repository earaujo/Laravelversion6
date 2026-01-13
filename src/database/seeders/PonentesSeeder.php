<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PonentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ponentes')->insert([
            [
                'nombre' => 'Dra. Elena Rodríguez',
                'biografia' => 'Experta en neurociencia aplicada a la inteligencia artificial con más de 15 años de investigación.',
                'especialidad' => 'IA y Biotecnología',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Ing. Marco Polo',
                'biografia' => 'Arquitecto de software senior y colaborador recurrente en proyectos Open Source de gran escala.',
                'especialidad' => 'Arquitectura de Microservicios',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Sofía Alarcón',
                'biografia' => 'Líder de diseño UX en empresas de Silicon Valley, enfocada en accesibilidad universal.',
                'especialidad' => 'Diseño de Experiencia de Usuario',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Carlos Méndez',
                'biografia' => 'Estratega de ciberseguridad con enfoque en protección de infraestructuras críticas.',
                'especialidad' => 'Ciberseguridad Ética',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Dra. Lucía Valente',
                'biografia' => 'Especialista en ética digital y el impacto social de la automatización en el empleo.',
                'especialidad' => 'Ética en Tecnología',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Javier Serna',
                'biografia' => 'Desarrollador Fullstack y evangelista de nuevas tecnologías Web3.',
                'especialidad' => 'Blockchain y Web3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Beatriz Ortiz',
                'biografia' => 'Consultora de negocios digitales y experta en escalabilidad de Startups.',
                'especialidad' => 'Emprendimiento Tecnológico',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Dr. Roberto Klein',
                'biografia' => 'Físico cuántico dedicado al desarrollo de algoritmos para computación cuántica.',
                'especialidad' => 'Computación Cuántica',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Mónica Silva',
                'biografia' => 'Especialista en marketing digital con enfoque en análisis de datos masivos.',
                'especialidad' => 'Data Driven Marketing',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Andrés Gaviria',
                'biografia' => 'Ingeniero de DevOps apasionado por la automatización y la cultura SRE.',
                'especialidad' => 'Cloud Computing y DevOps',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Valeria Luna',
                'biografia' => 'Psicóloga y coach de equipos técnicos de alto rendimiento.',
                'especialidad' => 'Liderazgo y Habilidades Blandas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Samuel Torres',
                'biografia' => 'Periodista tecnológico y analista de tendencias en el mercado de hardware.',
                'especialidad' => 'Tendencias de Consumo Tecnológico',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Paula Ferrara',
                'biografia' => 'Científica de datos con experiencia en modelos predictivos para el sector salud.',
                'especialidad' => 'Data Science',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Hugo Bossio',
                'biografia' => 'Abogado especializado en leyes de privacidad y protección de datos en la nube.',
                'especialidad' => 'Derecho Digital',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Isabel Allende (Hija)',
                'biografia' => 'Innovadora social que utiliza la tecnología para resolver problemas de suministro de agua.',
                'especialidad' => 'Tecnología Sostenible',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
