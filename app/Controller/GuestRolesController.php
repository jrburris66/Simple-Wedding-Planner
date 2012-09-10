<?php
App::uses('AppController', 'Controller');
/**
 * GuestRoles Controller
 *
 * @property GuestRole $GuestRole
 */
class GuestRolesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GuestRole->recursive = 0;
		$this->set('guestRoles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GuestRole->id = $id;
		if (!$this->GuestRole->exists()) {
			throw new NotFoundException(__('Invalid guest role'));
		}
		$this->set('guestRole', $this->GuestRole->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GuestRole->create();
			if ($this->GuestRole->save($this->request->data)) {
				$this->Session->setFlash(__('The guest role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guest role could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->GuestRole->id = $id;
		if (!$this->GuestRole->exists()) {
			throw new NotFoundException(__('Invalid guest role'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GuestRole->save($this->request->data)) {
				$this->Session->setFlash(__('The guest role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guest role could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GuestRole->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->GuestRole->id = $id;
		if (!$this->GuestRole->exists()) {
			throw new NotFoundException(__('Invalid guest role'));
		}
		if ($this->GuestRole->delete()) {
			$this->Session->setFlash(__('Guest role deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guest role was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
