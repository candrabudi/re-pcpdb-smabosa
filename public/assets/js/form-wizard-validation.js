/**
 *  Form Wizard
 */

'use strict';

(function () {
  const select2 = $('.select2'),
    selectPicker = $('.selectpicker');

  // Wizard Validation
  // --------------------------------------------------------------------
  const wizardValidation = document.querySelector('#wizard-validation');
  if (typeof wizardValidation !== undefined && wizardValidation !== null) {
    // Wizard form
    const wizardValidationForm = wizardValidation.querySelector('#wizard-validation-form');
    // Wizard steps
    const wizardValidationFormStep1 = wizardValidationForm.querySelector('#biodata-siswa-validation');
    const wizardValidationFormStep2 = wizardValidationForm.querySelector('#page-two');
    const wizardValidationFormStep3 = wizardValidationForm.querySelector('#page-four');
    const wizardValidationFormStep4 = wizardValidationForm.querySelector('#page-four');
    // Wizard next prev button
    const wizardValidationNext = [].slice.call(wizardValidationForm.querySelectorAll('.btn-next'));
    const wizardValidationPrev = [].slice.call(wizardValidationForm.querySelectorAll('.btn-prev'));

    const validationStepper = new Stepper(wizardValidation, {
      linear: true
    });

    // Account details
    const FormValidation1 = FormValidation.formValidation(wizardValidationFormStep1, {
      fields: {
        
        fullName: {
          validators: {
            notEmpty: {
              message: 'Nama Lengkap Harus di isi'
            },
            stringLength: {
              min: 6,
              message: 'Minimal Nama Lengkap di isi 6 huruf atau lebih'
            },
            regexp: {
              regexp: /^[a-zA-Z0-9 ]+$/,
              message: 'The name can only consist of alphabetical, number and space'
            }
          }
        },
        nisn: {
          validators: {
            notEmpty: {
              message: 'NISN Harus di isi'
            },
            stringLength: {
              min: 10,
              message: 'Minimal NISN di isi 10 huruf atau lebih'
            },
          }
        },
        gender: {
          validators: {
            notEmpty: {
              message: 'Jenis Kelamin Mohon di isi'
            }
          }
        },
        religionStudent: {
          validators: {
            notEmpty: {
              message: 'Agama Mohon di isi'
            }
          }
        },
        placeOfBirthStudent: {
          validators: {
            notEmpty: {
              message: 'Tempat Lahir Mohon di isi'
            }
          }
        },
        dateOfBirthStudent: {
          validators: {
            notEmpty: {
              message: 'Tanggal lahir Mohon di isi'
            }
          }
        },
        emailStudent: {
          validators: {
            notEmpty: {
              message: 'Email Wajib di isi'
            },
            emailAddress: {
              message: 'The value is not a valid email address'
            }
          }
        },
        noTelpStudent: {
          validators: {
            notEmpty: {
              message: 'Nomor Telepon Mohon di isi'
            }
          }
        },
        noWhatsappStudent: {
          validators: {
            notEmpty: {
              message: 'Nomor Whatsapp Mohon di isi'
            }
          }
        },
        addressStudent: {
          validators: {
            notEmpty: {
              message: 'Alamat Mohon di isi'
            }
          }
        },
        originSchoolStudent: {
          validators: {
            notEmpty: {
              message: 'Nama Sekolah Mohon di isi'
            }
          }
        },
        noPhoneSchool: {
          validators: {
            notEmpty: {
              message: 'Nomor Telpon Sekolah Mohon di isi'
            }
          }
        },
        addressOriginSchool: {
          validators: {
            notEmpty: {
              message: 'Alamat Sekolah Mohon di isi'
            }
          }
        },
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-6'
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          //* Move the error message out of the `input-group` element
          if (e.element.parentElement.classList.contains('input-group')) {
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    }).on('core.form.valid', function () {
      // Jump to the next step when all fields in the current step are valid
      validationStepper.next();
    });

    // Personal info
    const FormValidation2 = FormValidation.formValidation(wizardValidationFormStep2, {
      fields: {
        scoreSevenGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Nilai Semester 1 Kelas 7 mohon untuk di isi!'
            }
          }
        },
        scoreSevenGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Nilai Semester 2 Kelas 7 mohon untuk di isi!'
            }
          }
        },
        scoreEightGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Nilai Semester 1 Kelas 8 mohon untuk di isi!'
            }
          }
        }, 
        scoreEightGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Nilai Semester 2 Kelas 8 mohon untuk di isi!'
            }
          }
        },
        scoreNineGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Nilai Semester 1 Kelas 9 mohon untuk di isi!'
            }
          }
        },
        scoreNineGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Nilai Semester 2 Kelas 9 mohon untuk di isi!'
            }
          }
        },
        sickSevenGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Jumlah Sakit Semester 1 Kelas 7 mohon untuk di isi!'
            }
          }
        },
        permissionSevenGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Jumlah Izin Semester 1 Kelas 7 mohon untuk di isi!'
            }
          }
        },
        alphaSevenGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Jumlah Tanpa Keterangan Semester 1 Kelas 7 mohon untuk di isi!'
            }
          }
        },
        sickSevenGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Jumlah Sakit Semester 2 Kelas 7 mohon untuk di isi!'
            }
          }
        },
        permissionSevenGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Jumlah Izin Semester 2 Kelas 7 mohon untuk di isi!'
            }
          }
        },
        alphaSevenGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Jumlah Tanpa Keterangan Semester 2 Kelas 7 mohon untuk di isi!'
            }
          }
        },
        sickEightGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Jumlah Sakit Semester 1 Kelas 8 mohon untuk di isi!'
            }
          }
        },
        permissionEightGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Jumlah Izin Semester 1 Kelas 8 mohon untuk di isi!'
            }
          }
        },
        alphaEightGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Jumlah Tanpa Keterangan Semester 1 Kelas 8 mohon untuk di isi!'
            }
          }
        },
        sickEightGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Jumlah Sakit Semester 2 Kelas 8 mohon untuk di isi!'
            }
          }
        },
        permissionEightGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Jumlah Izin Semester 2 Kelas 8 mohon untuk di isi!'
            }
          }
        },
        alphaEightGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Jumlah Tanpa Keterangan Semester 2 Kelas 8 mohon untuk di isi!'
            }
          }
        },
        sickNineGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Jumlah Sakit Semester 1 Kelas 9 mohon untuk di isi!'
            }
          }
        },
        permissionNineGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Jumlah Izin Semester 1 Kelas 9 mohon untuk di isi!'
            }
          }
        },
        alphaNineGradeSemesterOne: {
          validators: {
            notEmpty: {
              message: 'Jumlah Tanpa Keterangan Semester 1 Kelas 9 mohon untuk di isi!'
            }
          }
        },
        sickNineGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Jumlah Sakit Semester 2 Kelas 9 mohon untuk di isi!'
            }
          }
        },
        permissionNineGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Jumlah Izin Semester 2 Kelas 9 mohon untuk di isi!'
            }
          }
        },
        alphaNineGradeSemesterTwo: {
          validators: {
            notEmpty: {
              message: 'Jumlah Tanpa Keterangan Semester 2 Kelas 9 mohon untuk di isi!'
            }
          }
        },
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-6, .col-sm-4'
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      }
    }).on('core.form.valid', function () {
      // Jump to the next step when all fields in the current step are valid
      validationStepper.next();
    });

    // Bootstrap Select (i.e Language select)
    if (selectPicker.length) {
      selectPicker.each(function () {
        var $this = $(this);
        $this.selectpicker().on('change', function () {
          FormValidation2.revalidateField('formValidationLanguage');
        });
      });
    }

    // select2
    if (select2.length) {
      select2.each(function () {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>');
        $this
          .select2({
            placeholder: 'Select an country',
            dropdownParent: $this.parent()
          })
          .on('change.select2', function () {
            // Revalidate the color field when an option is chosen
            FormValidation2.revalidateField('formValidationCountry');
          });
      });
    }

    // Social links
    const FormValidation3 = FormValidation.formValidation(wizardValidationFormStep3, {
      fields: {
        fullNameFather: {
          validators: {
            notEmpty: {
              message: 'Nama Lengkap Ayah Mohon di isi!'
            },
          }
        },
        birthOfPlaceFather: {
          validators: {
            notEmpty: {
              message: 'Tempat Lahir Ayah Mohon di isi!'
            },
          }
        },
        dateOfBirthFather: {
          validators: {
            notEmpty: {
              message: 'Tanggal Lahir Ayah Mohon di isi!'
            },
          }
        },
        religionFather: {
          validators: {
            notEmpty: {
              message: 'Agama Ayah Mohon di isi'
            },
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-6, .col-sm-4'
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      }
    }).on('core.form.valid', function () {
      // Jump to the next step when all fields in the current step are valid
      validationStepper.next();
    });
    
    const FormValidation4 = FormValidation.formValidation(wizardValidationFormStep4, {
      fields: {
        fullNameFather: {
          validators: {
            notEmpty: {
              message: 'Nama Lengkap Ayah Mohon di isi!'
            },
          }
        },
        birthOfPlaceFather: {
          validators: {
            notEmpty: {
              message: 'Tempat Lahir Ayah Mohon di isi!'
            },
          }
        },
        dateOfBirthFather: {
          validators: {
            notEmpty: {
              message: 'Tanggal Lahir Ayah Mohon di isi!'
            },
          }
        },
        religionFather: {
          validators: {
            notEmpty: {
              message: 'Agama Ayah Mohon di isi'
            },
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-6'
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      }
    }).on('core.form.valid', function () {
      // You can submit the form
      // wizardValidationForm.submit()
      // or send the form data to server via an Ajax request
      // To make the demo simple, I just placed an alert
      alert('Submitted..!!');
    });

    wizardValidationNext.forEach(item => {
      item.addEventListener('click', event => {
        // When click the Next button, we will validate the current step
        switch (validationStepper._currentIndex) {
          case 0:
            FormValidation1.validate();
            break;

          case 1:
            FormValidation2.validate();
            break;

          case 2:
            FormValidation3.validate();
            break;

          case 3:
            FormValidation4.validate();
            break;

          default:
            break;
        }
      });
    });

    wizardValidationPrev.forEach(item => {
      item.addEventListener('click', event => {
        switch (validationStepper._currentIndex) {
          case 2:
            validationStepper.previous();
            break;

          case 1:
            validationStepper.previous();
            break;

          case 0:

          default:
            break;
        }
      });
    });
  }
})();
