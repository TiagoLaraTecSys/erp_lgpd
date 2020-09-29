import React from 'react';
'use strict';

const e = React.createElement;

class LikeButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = { liked: false };
  }

  render() {
    return(    

      <div class="container-fluid">

        <div class="row mb-8">

          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

            <div class="row align-items-center">

              <div class="col-xl-12 col-12 mb-7 mb-xl-2">

                <h3 class="text-muted text-center mb-3">Casos de Uso Cadastrados</h3>

                <table class="table table-striped bg-light text-center">

                  <thead>

                    <tr class="text-muted">

                      <th>Caso de Uso</th>
                      <th>Descrição</th>
                      <th>Requer consentimento</th>

                      <th>Qntd requisições consentidas</th>

                      <th>Qntd requisições contestadas</th>

                    </tr>

                  </thead>

                  <tbody>

                  </tbody>

                </table>
                <nav>

                  <ul class="pagination justify-content-center">

                    <li class="page-item">

                      <a href="#" class="page-link py-2 px-3">

                        <span>&laquo;</span>

                      </a>

                    </li>

                    <li class="page-item active">

                      <a href="#" class="page-link py-2 px-3">

                        1

                      </a>

                    </li>

                    <li class="page-item">

                      <a href="#" class="page-link py-2 px-3">

                        2

                      </a>

                    </li>

                    <li class="page-item">

                      <a href="#" class="page-link py-2 px-3">

                        3

                      </a>

                    </li>

                    <li class="page-item">

                      <a href="#" class="page-link py-2 px-3">

                        <span>&raquo;</span>

                      </a>

                    </li>

                  </ul>

                </nav>

              </div>

            </div>

          </div>

        </div>

      </div>

);
  }
}

const domContainer = document.querySelector('#table_notice_container');
ReactDOM.render(e(LikeButton), domContainer);