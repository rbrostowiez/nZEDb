<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program (see LICENSE.txt in the base directory.  If
 * not, see:
 *
 * @link      <http://www.gnu.org/licenses/>.
 * @author    niel
 * @copyright 2019 nZEDb
 */

namespace zed;

if (! defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

// These are file path constants
if (!defined('nZEDb_ROOT')) {
	define('nZEDb_ROOT', realpath(dirname(__DIR__)) . DS);
}


class Nzedb
{
	public const BASE		= nZEDb_ROOT;

	public const CONFIGS	= Nzedb::BASE . 'configuration' . DS;

	public const COVERS		= Nzedb::RESOURCES . 'covers' . DS;

	public const DEBUG		= true;

	public const LARAVEL	= Nzedb::BASE . 'app-laravel' . DS;

	public const MISC		= Nzedb::BASE . 'misc' . DS;

	public const NIX		= Nzedb::UPDATE . 'nix' . DS;

	public const RESOURCES	= Nzedb::BASE . 'resources' . DS;

	public const ROOT		= Nzedb::BASE;

	public const UPDATE 	= Nzedb::MISC . 'update' . DS;

	public const VERSIONS	= Nzedb::BASE . 'build' . DS . 'nzedb.xml';
}
