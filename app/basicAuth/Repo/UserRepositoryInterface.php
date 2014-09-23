<?php namespace basicAuth\Repo;

interface UserRepositoryInterface {
	public function getAll();
	public function getAlll();
	public function find($id);
	public function updateGroup($user_id, $group_id);
	public function create($fields);
}