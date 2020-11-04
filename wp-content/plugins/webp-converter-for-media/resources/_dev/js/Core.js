import Notice from './classes/Notice';
import Regenerate from './classes/Regenerate';

class Core
{
  constructor()
  {
    new Notice();
    new Regenerate();
  }
}
new Core();
