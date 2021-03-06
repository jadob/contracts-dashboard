<?php
declare(strict_types=1);

namespace Jadob\Contracts\Dashboard;

use DateTimeInterface;

interface DashboardContextInterface
{
    public function hasRole(string $roleName): bool;
    public function getRequestDateTime(): DateTimeInterface;
}