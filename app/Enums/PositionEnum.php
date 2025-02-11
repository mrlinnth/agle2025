<?php

namespace App\Enums;

enum PositionEnum: string
{
    case MASTER = 'Master Student';
    case PHD = 'PhD Student';
    case RESEARCHER = 'Researcher';
    case LECTURER = 'Lecturer';
    case ASSISTANT_PROFESSOR = 'Assistant Professor';
    case ASSOCIATE_PROFESSOR = 'Associate Professor';
    case PROFESSOR = 'Professor';
    case OTHER = 'Other';
}
