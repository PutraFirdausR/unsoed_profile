<?php
// FILE: app/components/permohonan_card.php
// Variable: $step (array)
?>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-8">
    
    <div class="bg-[#002b54] p-5 flex items-center gap-4">
        <div class="w-10 h-10 rounded-full bg-yellow-400 text-[#002b54] flex items-center justify-center font-bold text-xl shadow-md">
            <?= $step['number'] ?>
        </div>
        <h3 class="text-white font-bold text-xl"><?= $step['title'] ?></h3>
    </div>

    <div class="p-8">
        <p class="text-slate-700 mb-6 text-lg">
            <?= $step['desc'] ?>
        </p>

        <?php if($step['content_type'] == 'grid_boxes'): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <?php foreach($step['boxes'] as $box): 
                    $c = $box['color']; // green / yellow
                    $bg = "bg-{$c}-50";
                    $border = "border-{$c}-200";
                    $text = "text-{$c}-800";
                    $iconColor = "text-{$c}-600";
                    $listColor = "text-{$c}-700";
                ?>
                <div class="p-5 <?= $bg ?> border <?= $border ?> rounded-xl">
                    <div class="flex items-center gap-2 mb-2">
                        <svg class="w-5 h-5 <?= $iconColor ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <h4 class="font-bold <?= $text ?>"><?= $box['title'] ?></h4>
                    </div>
                    <ul class="list-disc list-inside text-sm <?= $listColor ?> ml-1">
                        <?php foreach($box['items'] as $item): ?>
                            <li><?= $item ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
            
            <?php if(isset($step['alert'])): ?>
                <div class="p-4 bg-red-50 border-l-4 border-red-500 rounded-r-lg">
                    <p class="text-red-700 text-sm font-medium">
                        <?= $step['alert']['text'] ?>
                    </p>
                </div>
            <?php endif; ?>

        <?php elseif($step['content_type'] == 'list_columns'): ?>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-8 text-sm text-slate-600 mb-8 list-disc pl-5">
                <?php foreach($step['list_items'] as $li): ?>
                    <li><?= $li ?></li>
                <?php endforeach; ?>
            </ul>

            <?php if(isset($step['extra_info'])): ?>
                <div class="flex flex-col md:flex-row gap-4 items-center bg-slate-50 p-5 rounded-xl border border-slate-200">
                    <?php foreach($step['extra_info'] as $index => $info): 
                        $titleColor = ($info['color'] == 'red') ? 'text-red-600' : 'text-slate-800';
                        $borderClass = ($index > 0) ? 'md:border-l-2 border-slate-200 md:pl-4' : '';
                    ?>
                    <div class="flex-1 <?= $borderClass ?> w-full md:w-auto">
                        <h5 class="font-bold <?= $titleColor ?> mb-1"><?= $info['title'] ?></h5>
                        <p class="text-sm text-slate-600"><?= $info['text'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        <?php elseif($step['content_type'] == 'status_list'): ?>
            <div class="space-y-4">
                <?php foreach($step['statuses'] as $stat): 
                    $c = $stat['color']; // green, yellow, red
                    $bg = "bg-{$c}-50";
                    $border = "border-{$c}-100";
                    $badgeBg = "bg-{$c}-100";
                    $badgeText = "text-{$c}-700";
                    $timeColor = "text-{$c}-600";
                ?>
                <div class="flex flex-col md:flex-row gap-4 <?= $bg ?> p-4 rounded-xl border <?= $border ?> items-start">
                    <div class="<?= $badgeBg ?> <?= $badgeText ?> font-bold px-3 py-1 rounded text-xs uppercase tracking-wide"><?= $stat['label'] ?></div>
                    <div class="flex-1">
                        <p class="text-sm text-slate-700 font-semibold"><?= $stat['title'] ?></p>
                        <p class="text-sm text-slate-500"><?= $stat['desc'] ?></p>
                    </div>
                    <div class="text-right">
                        <span class="block text-2xl font-bold <?= $timeColor ?>"><?= $stat['time'] ?></span>
                        <span class="text-xs text-slate-400 uppercase"><?= $stat['time_desc'] ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>

    </div>
</div>