document.addEventListener("DOMContentLoaded", () => {
  const emailStep = document.getElementById("step-email");
  const otpStep = document.getElementById("step-otp");
  const resetStep = document.getElementById("step-reset");

  const submitEmailButton = document.getElementById("submit-email");
  const submitOtpButton = document.getElementById("submit-otp");
  const resetPasswordButton = document.getElementById("reset-password-btn");

  // Step 1: Submit Email
  submitEmailButton.addEventListener("click", async () => {
      const email = document.getElementById("forgot-email").value;

      if (!email) {
          alert("Please enter your email address.");
          return;
      }

      try {
          const response = await fetch("http://localhost:4000/api/v1/forgot-password/send-otp", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({ email }),
          });

          const data = await response.json();
          if (data.success) {
              alert("OTP sent to your email.");
              emailStep.classList.add("hidden");
              otpStep.classList.remove("hidden");
          } else {
              alert(data.message || "Failed to send OTP.");
          }
      } catch (error) {
          console.error("Error sending OTP:", error);
      }
  });

  // Step 2: Submit OTP
  submitOtpButton.addEventListener("click", async () => {
      const otp = document.getElementById("forgot-otp").value;
      const email = document.getElementById("forgot-email").value;

      if (!otp || otp.length !== 6) {
          alert("Please enter the 6-digit OTP.");
          return;
      }

      try {
          const response = await fetch("http://localhost:4000/api/v1/forgot-password/verify-otp", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({ email, otp }),
          });

          const data = await response.json();
          if (data.success) {
              alert("OTP verified successfully.");
              otpStep.classList.add("hidden");
              resetStep.classList.remove("hidden");
          } else {
              alert(data.message || "Invalid OTP.");
          }
      } catch (error) {
          console.error("Error verifying OTP:", error);
      }
  });

  // Step 3: Reset Password
  resetPasswordButton.addEventListener("click", async () => {
      const password = document.getElementById("reset-password").value;
      const confirmPassword = document.getElementById("confirm-password").value;
      const email = document.getElementById("forgot-email").value;

      if (!password || !confirmPassword) {
          alert("Please fill out all fields.");
          return;
      }

      if (password !== confirmPassword) {
          alert("Passwords do not match.");
          return;
      }

      try {
          const response = await fetch("http://localhost:4000/api/v1/forgot-password/reset-password", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({ email, newPassword: password }),
          });

          const data = await response.json();
          if (data.success) {
              alert("Password reset successfully.");
              window.location.href = "/admin";
          } else {
              alert(data.message || "Failed to reset password.");
          }
      } catch (error) {
          console.error("Error resetting password:", error);
      }
  });
});
