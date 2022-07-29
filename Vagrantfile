$BoxName = 'debian 11.4.0'
$VmIp='192.168.50.50'
$VmName = 'Debian 11.4.0_OfficeMag'
$VmHostName = 'web'
$VmRam = 2048
$VmCpu = 2
$VmHddSize ='10GB'

Vagrant.configure('2') do |config|
  # Образ системы debian-11.4.0-amd64-netinst
  config.vm.box = $BoxName		 							  
  # Не проверять репозиторий на наличие обновлений
  config.vm.box_check_update = false 						
  # Размер HDD
  config.disksize.size = $VmHddSize							
  # General Vagrant VM Configuration
  config.vm.provider 'virtualbox' do |v| 					
	# Имя виртуальной машины
	v.name = $VmName				 						
    # Объем оперативной памяти
	v.memory = $VmRam 										
	# Количество ядер процессора
	v.cpus = $VmCpu											
  end
  # hostname виртуальной машины
  config.vm.hostname = $VmHostName							
  # Настройки сети
  config.vm.network :public_network, ip: $VmIp				

  config.vm.provision :ansible_local do |ansible|
    ansible.playbook = 'playbook.yml'
  end
end
  
  
