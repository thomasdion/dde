<?php

namespace Drupal\dde_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Copyright' block.
 *
 * @Block(
 *  id = "dpe_blocks_copyright",
 *  admin_label = @Translation("Copyright"),
 * )
 */
class Copyright extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['label_display' => FALSE];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];

    $build['copyright']['#markup'] = '<div class="copyright"><p>' . 
       t('Ενημέρωση: Ταυρίδης Ιορδάνης ΠΕ ΔΙΟΙΚ-ΟΙΚ | Σχεδιασμός: Θωμάς Διονύσης ΤΕ ΠΛΗΡ') .
      '<br>© ' . date('Y') . ' - ' . $this->t('Διεύθυνση Πρωτοβάθμιας Εκπαίδευσης Δυτικής Θεσσαλονίκης.') . '</p></div>';
    $build['#attributes']['class'][] = 'pde-copyright';

    return $build;
  }

}
