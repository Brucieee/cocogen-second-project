<div class="add-policy-container" id="policy-container">
    <!-- Initial 2 policies -->
    <div class="policy-component" id="policy-1">
        <div class="label-container">
            <span class="label-text">
                Policy 1
                <span class="required">*</span>
            </span>
        </div>

        <div class="policy-container">
            <input type="text" class="policy-input" id="input-policy-1" name="policy[1]" placeholder="Enter policy details" />
            <div class="action-container">
                <img src="{{ asset('assets/icons/Icon-Delete.svg') }}" class="icon-delete" onclick="deletePolicy(1)" />
                <img src="{{ asset('assets/icons/Icon-Add.svg') }}" class="icon-add" onclick="addPolicy()" />
            </div>
        </div>
    </div>

    <div class="policy-component" id="policy-2">
        <div class="label-container">
            <span class="label-text">
                Policy 2
                <span class="required">*</span>
            </span>
        </div>

        <div class="policy-container">
            <input type="text" class="policy-input" id="input-policy-2" name="policy[2]" placeholder="Enter policy details" />
            <div class="action-container">
                <img src="{{ asset('assets/icons/Icon-Delete.svg') }}" class="icon-delete" onclick="deletePolicy(2)" />
                <img src="{{ asset('assets/icons/Icon-Add.svg') }}" class="icon-add" onclick="addPolicy()" />
            </div>
        </div>
    </div>
</div>

<!-- Add the necessary styles inside the component -->
<style>
    .add-policy-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
    }

    .policy-container {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .policy-input {
        color: var(--Surfaces-LVL-9, #1E1F21);
        font-family: Inter;
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        padding: 8px 12px;
        border: none;
        border-radius: 1px;
        border-bottom: 1px solid var(--Teal-LVL-9, #066);
        flex-grow: 1;
        outline: none;
    }

    .action-container {
        display: flex;
        gap: 12px;
        align-items: center;
    }

    .icon-delete, .icon-add {
        width: 39px;
        height: 39px;
        cursor: pointer;
    }
</style>

<!-- Add the necessary JavaScript inside the component -->
<script>
    let policyCount = 2; // Start with two policies already added

    // Function to add a new policy component
    function addPolicy() {
        if (policyCount >= 3) return; // Limit the number of policies to 3, ignore further adds

        // Increment policy count
        policyCount++;

        // Create a new policy element from scratch
        const policyContainer = document.getElementById("policy-container");

        const newPolicy = document.createElement('div');
        newPolicy.classList.add("policy-component");
        newPolicy.id = `policy-${policyCount}`;

        // Add label container
        const labelContainer = document.createElement('div');
        labelContainer.classList.add("label-container");

        const labelText = document.createElement('span');
        labelText.classList.add("label-text");
        labelText.textContent = `Policy ${policyCount}`;
        labelText.innerHTML += '<span class="required">*</span>';

        labelContainer.appendChild(labelText);
        newPolicy.appendChild(labelContainer);

        // Add policy input container
        const policyInputContainer = document.createElement('div');
        policyInputContainer.classList.add("policy-container");

        const input = document.createElement('input');
        input.type = "text";
        input.classList.add("policy-input");
        input.id = `input-policy-${policyCount}`;
        input.name = `policy[${policyCount}]`; // For backend processing
        input.placeholder = "Enter policy details";

        const actionContainer = document.createElement('div');
        actionContainer.classList.add("action-container");

        const deleteIcon = document.createElement('img');
        deleteIcon.src = "{{ asset('assets/icons/Icon-Delete.svg') }}";
        deleteIcon.classList.add("icon-delete");
        deleteIcon.onclick = () => deletePolicy(policyCount);

        const addIcon = document.createElement('img');
        addIcon.src = "{{ asset('assets/icons/Icon-Add.svg') }}";
        addIcon.classList.add("icon-add");
        addIcon.onclick = addPolicy;

        actionContainer.appendChild(deleteIcon);
        actionContainer.appendChild(addIcon);

        policyInputContainer.appendChild(input);
        policyInputContainer.appendChild(actionContainer);
        newPolicy.appendChild(policyInputContainer);

        // Append the new policy to the container
        policyContainer.appendChild(newPolicy);
    }

    // Function to delete a policy
    function deletePolicy(policyId) {
        if (policyCount <= 2) return; // Ensure there's a minimum of 2 policies

        // Decrement policy count
        policyCount--;

        // Find and remove the policy by ID
        const policyToDelete = document.getElementById(`policy-${policyId}`);
        policyToDelete.remove();

        // Renumber the remaining policies to keep the sequence intact
        const policies = document.querySelectorAll(".policy-component");
        policies.forEach((policy, index) => {
            const newPolicyId = index + 1; // Update the policyId starting from 1
            policy.id = `policy-${newPolicyId}`;
            
            const label = policy.querySelector(".label-text");
            label.textContent = `Policy ${newPolicyId}`;

            const input = policy.querySelector(".policy-input");
            input.id = `input-policy-${newPolicyId}`;
            input.name = `policy[${newPolicyId}]`;
            
            const deleteIcon = policy.querySelector(".icon-delete");
            deleteIcon.onclick = () => deletePolicy(newPolicyId);

            const addIcon = policy.querySelector(".icon-add");
            addIcon.onclick = addPolicy;
        });
    }
</script>
