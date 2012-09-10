<?php
App::uses('AppController', 'Controller');
/**
 * TimeActivities Controller
 *
 * @property TimeActivity $TimeActivity
 */
class TimeActivitiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TimeActivity->recursive = 0;
		$this->set('timeActivities', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TimeActivity->id = $id;
		if (!$this->TimeActivity->exists()) {
			throw new NotFoundException(__('Invalid time activity'));
		}
		$this->set('timeActivity', $this->TimeActivity->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TimeActivity->create();
			if ($this->TimeActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The time activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time activity could not be saved. Please, try again.'));
			}
		}
		$contacts = $this->TimeActivity->Contact->find('list');
		$users = $this->TimeActivity->User->find('list');
		$this->set(compact('contacts', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TimeActivity->id = $id;
		if (!$this->TimeActivity->exists()) {
			throw new NotFoundException(__('Invalid time activity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TimeActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The time activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time activity could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TimeActivity->read(null, $id);
		}
		$contacts = $this->TimeActivity->Contact->find('list');
		$users = $this->TimeActivity->User->find('list');
		$this->set(compact('contacts', 'users'));
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
		$this->TimeActivity->id = $id;
		if (!$this->TimeActivity->exists()) {
			throw new NotFoundException(__('Invalid time activity'));
		}
		if ($this->TimeActivity->delete()) {
			$this->Session->setFlash(__('Time activity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Time activity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
