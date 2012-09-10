<?php
App::uses('AppController', 'Controller');
/**
 * Ratings Controller
 *
 * @property Rating $Rating
 */
class RatingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rating->recursive = 0;
		$this->set('ratings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Rating->id = $id;
		if (!$this->Rating->exists()) {
			throw new NotFoundException(__('Invalid rating'));
		}
		$this->set('rating', $this->Rating->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rating->create();
			if ($this->Rating->save($this->request->data)) {
				$this->Session->setFlash(__('The rating has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rating could not be saved. Please, try again.'));
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
		$this->Rating->id = $id;
		if (!$this->Rating->exists()) {
			throw new NotFoundException(__('Invalid rating'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rating->save($this->request->data)) {
				$this->Session->setFlash(__('The rating has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rating could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rating->read(null, $id);
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
		$this->Rating->id = $id;
		if (!$this->Rating->exists()) {
			throw new NotFoundException(__('Invalid rating'));
		}
		if ($this->Rating->delete()) {
			$this->Session->setFlash(__('Rating deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rating was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
