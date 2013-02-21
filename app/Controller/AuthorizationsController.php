<?php
App::uses('AppController', 'Controller');
/**
 * Authorizations Controller
 *
 * @property Authorization $Authorization
 */
class AuthorizationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Authorization->recursive = 0;
		$this->set('authorizations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Authorization->exists($id)) {
			throw new NotFoundException(__('Invalid authorization'));
		}
		$options = array('conditions' => array('Authorization.' . $this->Authorization->primaryKey => $id));
		$this->set('authorization', $this->Authorization->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Authorization->create();
			if ($this->Authorization->save($this->request->data)) {
				$this->Session->setFlash(__('The authorization has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The authorization could not be saved. Please, try again.'));
			}
		}
		$users = $this->Authorization->User->find('list');
		$demoLinks = $this->Authorization->DemoLink->find('list');
		$this->set(compact('users', 'demoLinks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Authorization->exists($id)) {
			throw new NotFoundException(__('Invalid authorization'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Authorization->save($this->request->data)) {
				$this->Session->setFlash(__('The authorization has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The authorization could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Authorization.' . $this->Authorization->primaryKey => $id));
			$this->request->data = $this->Authorization->find('first', $options);
		}
		$users = $this->Authorization->User->find('list');
		$demoLinks = $this->Authorization->DemoLink->find('list');
		$this->set(compact('users', 'demoLinks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Authorization->id = $id;
		if (!$this->Authorization->exists()) {
			throw new NotFoundException(__('Invalid authorization'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Authorization->delete()) {
			$this->Session->setFlash(__('Authorization deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Authorization was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
